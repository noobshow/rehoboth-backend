<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Signal\OptimusSignalController;
use App\Http\Controllers\Payment\StripeController;
use App\Models\CDLSignal;
use App\Models\NewsData;
use App\Models\OptimusData;
use App\Models\OptimusSignal;
use App\Models\TradeBlotter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Laravel\Cashier\Cashier;
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
            $trade_blotter_data = [];
            $cdl_and_bias_data = [];
            if ($is_valid_optimus_user) {
                $trade_blotter_data = TradeBlotter::all();
                $cdl_and_bias_data = CDLSignal::all();
            }
            // read each news data from model, then sort by time in callback, then take 5
            $news_data = NewsData::all()->sortByDesc(function ($news) {
                return $news->time;
            })->take(5);
            // Log::debug("CDL Signals: " . $cdl_and_bias_data->toJson());

            return view('dashboard', [
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
            $optimus_data = [];
            if ($is_valid_optimus_user && $user->role != 'admin') {
                // is email verified?
                if (!$user->hasVerifiedEmail()) {
                    return redirect()->route('verification.notice');
                }

                $optimus_data = OptimusSignal::all();
            }
            // show EURUSD to non-subscribed users
            // } else {
            //     $optimus_data = OptimusSignal::where('asset', 'EURUSD')->get();

            return view('optimus-pro', [
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

            return view('get-funded', [
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

    // Payment routes
    Route::post('/stripe-charge', [StripeController::class, 'handlePayment'])->name('stripe.charge');
});

// Optimus Pro API routes
Route::post('/update-trades-data', [OptimusSignalController::class, 'pushOptimusProTradeBlotters']);
Route::post('/update-news-data', [OptimusSignalController::class, 'pushOptimusProNewsDatas']);
Route::post('/update-cdl-data', [OptimusSignalController::class, 'pushOptimusProCDLSignals']);
Route::post('/update-optimus-pro-data', [OptimusSignalController::class, 'pushOptimusProSignals']);

require __DIR__ . '/auth.php';
