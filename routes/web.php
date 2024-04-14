<?php

use App\Events\OptimusAlertUpdated;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Signal\OptimusSignalController;
use App\Http\Controllers\Payment\StripeController;
use App\Models\CDLSignal;
use App\Models\FundedAccount;
use App\Models\Message;
use App\Models\NewsData;
use App\Models\OptimusData;
use App\Models\OptimusSignal;
use App\Models\TradeBlotter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        $user = auth()->user();
        if ($user instanceof App\Models\User) { // Check if $user is an instance of User model
            // get important data
            $funded_accounts = $user->fundedAccounts;
            $is_funded_account = $funded_accounts->count() > 0;
            $is_valid_optimus_user = $user->subscribedToProduct(config('product.product_optimus_pro'));
            $is_valid_optimus_user = $is_valid_optimus_user || $is_funded_account || $user->role == 'admin';
            $actively_funded = $funded_accounts->where('active', true)->count() > 0;
            // get TradeBlotter Data
            $alert = "";
            $cdl_and_bias_data = [];
            $trade_blotter_data = [];
            if ($is_valid_optimus_user) {
                $cdl_and_bias_data = CDLSignal::all();
                $trade_blotter_data = TradeBlotter::all();
                $alert = Cache::get("optimus-mover-alert");
            }
            // read each news data from model, then sort by time in callback, then take 5
            $news_data = NewsData::all()->sortByDesc(function ($news) {
                return $news->time;
            })->take(5);
            // Log::debug("CDL Signals: " . $cdl_and_bias_data->toJson());

            return view('dashboard', [
                'alert' => $alert,
                'news_data' => $news_data,
                'actively_funded' => $actively_funded,
                'funded_accounts' => $funded_accounts,
                'intent' => $user->createSetupIntent(),
                'is_funded_account' => $is_funded_account,
                'cdl_and_bias_data' => $cdl_and_bias_data,
                'trade_blotter_data' => $trade_blotter_data,
                'is_valid_optimus_user' => $is_valid_optimus_user,
            ]);
        }
        return view('dashboard');
    })->name('dashboard');

    Route::get('optimus-pro', function () {
        $user = auth()->user();
        if ($user instanceof App\Models\User) { // Check if $user is an instance of User model
            // get important data
            $funded_accounts = $user->fundedAccounts();
            $is_funded_account = $funded_accounts->count() > 0;
            $is_valid_optimus_user = $user->subscribedToProduct(config('product.product_optimus_pro'));
            $is_valid_optimus_user = $is_valid_optimus_user || $is_funded_account || $user->role == 'admin';
            // get Optimus Data
            $alert = "";
            $optimus_data = [];
            $messages = [];
            if ($is_valid_optimus_user) {
                // is email verified?
                if (!$user->hasVerifiedEmail() && $user->role != 'admin') {
                    return redirect()->route('verification.notice');
                }

                $optimus_data = OptimusSignal::all();
                $alert = Cache::get("optimus-mover-alert");
                // $messages = $user->messagesAfterLastMessage()->get(); // TODO include user nickname

                // Find the timestamp of the user's last message or 24 hours ago, whichever is more recent
                // $lastMessageTimestamp = Message::where('user_id', $user->id)
                //     ->latest('created_at')
                //     ->first()
                //     ->created_at ?? now()->subDay();

                // $thresholdTimestamp = now()->subDay()->gt($lastMessageTimestamp) ? now()->subDay() : $lastMessageTimestamp;

                // Set the threshold timestamp to 24 hours ago
                $thresholdTimestamp = now()->subDay();

                // Fetch all messages sent after the calculated threshold timestamp, limit to 500
                $messages = Message::with('user')
                    ->where('created_at', '>', $thresholdTimestamp)
                    // ->latest('created_at')
                    ->limit(500)
                    ->get();
                //Show 500 messages if the number of messages is less than 500
                if (count($messages) < 500) {
                    $messages = Message::with('user')
                        ->limit(500)
                        ->get();
                }
            }
            // show EURUSD to non-subscribed users
            // } else {
            //     $optimus_data = OptimusSignal::where('asset', 'EURUSD')->get();

            return view('optimus-pro', [
                'alert' => $alert,
                'messages' => $messages,
                'optimus_data' => $optimus_data,
                'funded_accounts' => $funded_accounts,
                'intent' => $user->createSetupIntent(),
                'is_funded_account' => $is_funded_account,
                'is_valid_optimus_user' => $is_valid_optimus_user
            ]);
        }
        return view('optimus-pro');
    })->name('optimus-pro');

    Route::get('get-funded', function () {
        $user = auth()->user();
        if ($user instanceof App\Models\User) { // Check if $user is an instance of User model
            // get important data
            $funded_accounts = $user->fundedAccounts();
            $is_funded_account = $funded_accounts->count() > 0;
            $is_valid_optimus_user = $user->subscribedToProduct(config('product.product_optimus_pro'));
            $is_valid_optimus_user = $is_valid_optimus_user || $is_funded_account || $user->role == 'admin';

            //get all actively(`active`) funded accounts
            $actively_funded = $funded_accounts->where('active', true)->get();
            $is_actively_funded = $actively_funded->count() > 0;

            // is email verified?
            if ($is_funded_account && !$user->hasVerifiedEmail() && $user->role != 'admin') {
                return redirect()->route('verification.notice');
            }

            $alert = "";
            if ($is_valid_optimus_user) {
                $alert = Cache::get("optimus-mover-alert");
            }

            return view('get-funded', [
                'alert' => $alert,
                'actively_funded' => $actively_funded,
                'funded_accounts' => $funded_accounts,
                // 'intent' => $user->createSetupIntent(),
                'is_funded_account' => $is_funded_account,
                'is_actively_funded' => $is_actively_funded,
                'is_valid_optimus_user' => $is_valid_optimus_user
            ]);
        }
        return view('get-funded');
    })->name('get-funded');
    //
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/send-chat-message', [ChatController::class, 'sendMessage']);

    // Payment routes
    Route::post('/stripe-charge', [StripeController::class, 'handlePayment'])->name('stripe.charge');

    // Download routes
    Route::get('/download', function (Request $request) {
        // require name to be one of 'windows-metatrader', 'mac-metatrader', 'risk-manager' 
        $request->validate([
            'name' => 'required|in:windows-metatrader,mac-metatrader,risk-manager',
        ]);

        $file_name = $request->name;
        if ($file_name == 'risk-manager') {
            return Storage::download('RehobothRiskTool5.03.ex5');
        } else if ($file_name == 'mac-metatrader') {
            return Storage::download('MT5 Client Terminal - MAC.dmg');
        } else if ($file_name == 'windows-metatrader') {
            return Storage::download('MT5 Client Terminal - Windows.exe');
        }
        // return 404 
        abort(404, 'File not found');
    })->name('download');

    // TODO Manually Create Funded Account
    Route::post('/activate-funded-account', function (Request $request) {
        $request->validate([
            'user' => 'required:email',
            // 'funded_amount' => 'required',
            'level' => 'required',
            'mt5_login' => 'required',
            'mt5_server' => 'required',
            'mt5_password' => 'required',
        ]);

        $user = auth()->user();
        if ($user instanceof App\Models\User && $user->role == 'admin') {
            $requestUser = App\Models\User::with("fundedAccounts")->where('email', $request->user)->first();
            // Check if user exists
            if (!$requestUser) {
                return response()->json(['status' => false, 'message' => 'User not found'], 404);
            }
            $funded_accounts = $requestUser->fundedAccounts;

            // Check if user is already funded
            if ($funded_accounts && $funded_accounts->count() > 0) {
                $inactiveFundedAccount = $funded_accounts->where('active', false/* , 'funded_amount', $request->funded_amount */)->first();
                if ($inactiveFundedAccount) {
                    // Activate inactive funded account
                    $inactiveFundedAccount->update([
                        'active' => true,
                        'level' => $request->level,
                        'mt5_login' => $request->mt5_login,
                        'mt5_password' => $request->mt5_password,
                        'mt5_server' => $request->mt5_server,
                    ]);
                    return response()->json(['status' => true, 'message' => 'Funded account activated'], 200);
                }
                return response()->json(['status' => false, 'message' => 'User already funded'], 400);
            } else {
                // Create forced-active funded account
                // FundedAccount::create([
                //     'active' => true,
                //     'user_id' => $requestUser->id,
                //     'mt5_login' => $request->login,
                //     'mt5_password' => $request->password,
                //     'mt5_server' => $request->broker,
                //     'funded_amount' => $request->funded_amount,
                //     // 'invoice_id' => $invoice->asStripeInvoice()->id
                // ]);
                return response()->json(['status' => false, 'message' => 'No inactive funded accounts'], 400);
            }
            return response()->json(['status' => true, 'message' => 'Funded account activated'], 200);
        }
        return response()->json(['status' => false, 'message' => 'Forbidden'], 403);
        //http://localhost:8000/activate-funded-account?user=1&funded_amount=1000&login=123456&password=123456&broker=server
    })->name('activate.funded.account');

    Route::post('/update-funded-account', function (Request $request) {
        $request->validate([
            'user' => 'required:email',
            // 'funded_amount' => 'required',
            'level' => 'required',
            'mt5_login' => 'required',
            'mt5_server' => 'required',
            'mt5_password' => 'required',
        ]);

        $user = auth()->user();
        if ($user instanceof App\Models\User && $user->role == 'admin') {
            $requestUser = App\Models\User::with("fundedAccounts")->where('email', $request->user)->first();
            // Check if user exists
            if (!$requestUser) {
                return response()->json(['status' => false, 'message' => 'User not found'], 404);
            }
            $funded_accounts = $requestUser->fundedAccounts;

            // Check if user is already funded
            if ($funded_accounts && $funded_accounts->count() > 0) {
                $activeFundedAccount = $funded_accounts->where('active', true)->first();
                if ($activeFundedAccount) {
                    // Activate inactive funded account
                    $activeFundedAccount->update([
                        'level' => $request->level,
                        'mt5_login' => $request->mt5_login,
                        'mt5_password' => $request->mt5_password,
                        'mt5_server' => $request->mt5_server,
                    ]);
                    return response()->json(['status' => true, 'message' => 'Funded account updated'], 200);
                }
                return response()->json(['status' => false, 'message' => 'No actively funded account'], 400);
            }
            return response()->json(['status' => false, 'message' => 'No account found'], 400);
        }
        return response()->json(['status' => false, 'message' => 'Forbidden'], 403);
        //http://localhost:8000/activate-funded-account?user=1&funded_amount=1000&login=123456&password=123456&broker=server
    })->name('update.funded.account');

    Route::get('administraight', function () {
        $user = auth()->user();
        if ($user instanceof App\Models\User && $user->role == 'admin') { // Check if $user is an instance of User model

            $alert = Cache::get("optimus-mover-alert");
            $users = App\Models\User::with("fundedAccounts")->get();

            return view('adminer', [
                'alert' => $alert,
                'users' => $users,
                // 'actively_funded' => $actively_funded,
                // 'funded_accounts' => $funded_accounts,
                // // 'intent' => $user->createSetupIntent(),
                // 'is_funded_account' => $is_funded_account,
                // 'is_actively_funded' => $is_actively_funded,
                // 'is_valid_optimus_user' => $is_valid_optimus_user
            ]);
        }
        return view('adminer');
    })->name('administraight');

    /**
     * Redirects the user(admin) to webmail.
     *
     * @param Request 
     * @return RedirectResponse
     */
    Route::get("/adminer-mail", function (Request $request) {
        $user = auth()->user();
        if ($user instanceof App\Models\User && $user->role == 'admin') { // Check if $user is an instance of User model
            return Redirect::away("https://webmail.rehobothtraders.com");
        }
        return Redirect::away("https://rehobothtraders.com");
    })->name("adminer-mail");
});

/**
 * Redirects the user to the homepage.
 *
 * @param Request 
 * @return RedirectResponse
 */
Route::get("/home", function (Request $request) {
    return Redirect::away("http://rehobothtraders.com");
})->name("home");

// Optimus Pro backend routes
Route::post('/update-trades-data', [OptimusSignalController::class, 'pushOptimusProTradeBlotters']);
Route::post('/update-news-data', [OptimusSignalController::class, 'pushOptimusProNewsDatas']);
Route::post('/update-cdl-data', [OptimusSignalController::class, 'pushOptimusProCDLSignals']);
Route::post('/update-optimus-pro-data', [OptimusSignalController::class, 'pushOptimusProSignals']);
Route::post('/update-total-pips', [OptimusSignalController::class, 'pushOptimusProTotalPips']);

Route::post('/update-alert', function (Request $request) {
    $request->validate([
        'alert' => 'required',
    ]);
    $alert = $request->alert;
    Cache::put("optimus-mover-alert", $alert, now()->addMinutes(2));
    // trigger event
    event(new OptimusAlertUpdated($alert));
    return response()->json(['status' => true], 200);
})->name('add.alert');

require __DIR__ . '/auth.php';
