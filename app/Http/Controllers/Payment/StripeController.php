<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\FundedAccount;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    /**
     * Handle the payment using Stripe.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function handlePayment(Request $request)
    {
        $this->validate($request, [
            'token' => 'required',
            'plan' => 'required'
        ]);

        $plan = \App\Models\Plans::where('identifier', $request->plan)
            ->first();

        $isGetFunded = str_contains($plan->title, 'Get Funded');
        $isOptimusPro = str_contains($plan->title, 'OptimusPro');

        // Check if plan exists and title has either Get Funded or OptimusPro
        if (!$plan || (!$isGetFunded && !$isOptimusPro)) {
            return response()->json(['status' => false, 'message' => 'Plan not found'], 404);
        }

        try {
            $user = $request->user();
            if ($user instanceof \App\Models\User) {
                // Get Funded is a one-time payment
                if ($isGetFunded) {
                    $stripeUser = $user->createOrGetStripeCustomer();
                    // Charge the user
                    $user->updateDefaultPaymentMethod($request->token);
                    $invoice = $user->invoicePrice($plan->stripe_id, 1, [
                        'description' => $plan->title
                    ]);
                    // strip any non-numeric characters from the plan title
                    $amount = (int)preg_replace("/[^0-9]/", "", $plan->title);
                    $amount = $amount * 1000;

                    // Send notification to user
                    $user->notify(new \App\Notifications\GetFundedRequest($amount, $invoice->asStripeInvoice()->total / 100));
                    // Create inactive funded account
                    FundedAccount::create([
                        'active' => false,
                        'user_id' => $user->id,
                        'mt5_login' => "",
                        'mt5_password' => "",
                        'mt5_server' => "",
                        'funded_amount' => $amount,
                        'invoice_id' => $invoice->asStripeInvoice()->id
                    ]);
                } else {
                    // Create subscription
                    $user->newSubscription('default', $plan->stripe_id)->create($request->token);

                    // Convert Plan title to timeframe
                    $timeframe = str_replace('OptimusPro ', '', $plan->title);
                    // Convert Timeframe to days or months
                    if($timeframe == 'Weekly') {
                        $timeframe = '7 days';
                    } else if($timeframe == 'Monthly') {
                        $timeframe = '1 month';
                    } else if($timeframe == 'Bi-Annually') {
                        $timeframe = '6 months';
                    }

                    // Get amount using Stripe Plan ID
                    \Stripe\Stripe::setApiKey(config('cashier.secret'));
                    $amount = \Stripe\Plan::retrieve($plan->stripe_id)->amount;
                    $amount = $amount / 100;

                    // Send notification to user
                    $user->notify(new \App\Notifications\PurchasedOptimusPro($timeframe, $amount));
                }
                // , [
                //     'email' => $user->email
                // ]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => 'Error validating subscription: ' . $e->getMessage()], 500);
        }

        // Return a response
        if ($isGetFunded) {
            // Send email to contact@rehobothtraders.com about new Get Funded request
            // \Illuminate\Support\Facades\Mail::to('contact@rehobothtraders.com')->send(new \App\Mail\GetFundedRequest());
            // // Send email to user about new Get Funded request
            // \Illuminate\Support\Facades\Mail::to($request->user())->send(new \App\Mail\GetFundedRequest());
            return response()->json(['status' => true, 'message' => 'Your request to Get Funded will be processed accordingly']);
        }
            // Send email to contact@rehobothtraders.com about new Subscription
            // \Illuminate\Support\Facades\Mail::to('contact@rehobothtraders.com')->send(new \App\Mail\GetFundedRequest());
        return response()->json(['status' => true, 'message' => 'Your OptimusPro subscription is now activated!']);
    }    
}
