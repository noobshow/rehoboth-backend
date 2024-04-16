<?php

namespace App\Http\Controllers;

use App\Models\FundedAccount;
use Illuminate\Http\Request;

/* 
    TODO Idea
    Route::post('/admin/fund-account', [FundAccountController::class, 'fundAccount'])->name('
    admin.fund-account');

    Route::post('/admin/fund-account-cancel', [FundAccountController::class, 'fundAccountCancel'])->name('
    admin.fund-account-cancel');

    Route::post('/admin/fund-account-confirm', [FundAccountController::class, 'fundAccountConfirm'])->name('
    admin.fund-account-confirm');

    Route::post('/admin/fund-account-reject', [FundAccountController::class, 'fundAccountReject'])->name('
    admin.fund-account-reject');

    Route::post('/admin/fund-account-delete', [FundAccountController::class, 'fundAccountDelete'])->name('
    admin.fund-account-delete');

    Route::post('/admin/fund-account-update', [FundAccountController::class, 'fundAccountUpdate'])->name('
    admin.fund-account-update');

    Route::post('/admin/fund-account-status', [FundAccountController::class, 'fundAccountStatus'])->name('
    admin.fund-account-status');

    Route::post('/admin/fund-accounts', [FundAccountController::class, 'fundAccounts'])->name('
    admin.fund-accounts');

    Route::post('/admin/fund-accounts-delete', [FundAccountController::class, 'fundAccountsDelete'])->name('
    admin.fund-accounts-delete');

*/


class FundAccountController extends Controller
{

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if (auth()->user()->role !== 'admin') {
                return response()->json(['status' => false, 'message' => 'Forbidden'], 403);
            }
            return $next($request);
        });
    }

    /**
     * List the accounts.
     */
    public function list()
    {
        //
    }

    /**
     * Show the form for creating a new funded account.
     */
    public function create()
    {
        //
    }

    /**
     * Fund an account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request parameters
        $request->validate([
            'user' => 'required:email',
            // 'funded_amount' => 'required',
            'level' => 'required',
            'mt5_login' => 'required',
            'mt5_server' => 'required',
            'mt5_password' => 'required',
        ]);

        $requestUser = \App\Models\User::with("fundedAccounts")->where('email', $request->user)->first();
        // Check if user exists
        if (!$requestUser) {
            return response()->json(['status' => false, 'message' => 'User not found'], 404);
        }
        $funded_accounts = $requestUser->fundedAccounts;

        // Check if user is already funded
        if (!$funded_accounts || $funded_accounts->count() == 0) {
            return response()->json(['status' => false, 'message' => 'No inactive funded accounts'], 400);
        }
        $account = $funded_accounts->where('active', false/* , 'funded_amount', $request->funded_amount */)->first();
        if (!$account) {
            return response()->json(['status' => false, 'message' => 'User already funded'], 400);
        }
        // Activate inactive funded account
        $account->update([
            'active' => true,
            'level' => $request->level,
            'mt5_login' => $request->mt5_login,
            'mt5_password' => $request->mt5_password,
            'mt5_server' => $request->mt5_server,
        ]);

        // Send notification to user
        $requestUser->notify(new \App\Notifications\YouGotFunded(
            $account->amount,
            $request->level,
            $request->mt5_login,
            $request->mt5_password,
            $request->mt5_server
        ));
        return response()->json(['status' => true, 'message' => 'Account Funded and activated'], 200);
    }

    /**
     * Display the specified funded account.
     */
    public function show(FundedAccount $fundedAccount)
    {
        //
    }

    /**
     * Show the form for editing the specified funded account.
     */
    public function edit(FundedAccount $fundedAccount)
    {
        //
    }

    /**
     * Update the specified funded account in storage.
     */
    public function update(Request $request/* , FundedAccount $fundedAccount */)
    {
        $request->validate([
            'user' => 'required:email',
            // 'funded_amount' => 'required',
            'level' => 'required',
            'mt5_login' => 'required',
            'mt5_server' => 'required',
            'mt5_password' => 'required',
        ]);

        $requestUser = \App\Models\User::with("fundedAccounts")->where('email', $request->user)->first();
        // Check if user exists
        if (!$requestUser) {
            return response()->json(['status' => false, 'message' => 'User not found'], 404);
        }
        $funded_accounts = $requestUser->fundedAccounts;

        // Check if user is already funded
        if (!$funded_accounts || $funded_accounts->count() == 0) {
            return response()->json(['status' => false, 'message' => 'No account found'], 400);
        }
        $account = $funded_accounts->where('active', true)->first();
        if (!$account) {
            return response()->json(['status' => false, 'message' => 'No actively funded account'], 400);
        }

        // Update funded account
        $account->update([
            'level' => $request->level,
            'mt5_login' => $request->mt5_login,
            'mt5_password' => $request->mt5_password,
            'mt5_server' => $request->mt5_server,
        ]);

        // Send notification to user
        $requestUser->notify(new \App\Notifications\TradingAccountUpdated(
            $account->amount,
            $request->level,
            $request->mt5_login,
            $request->mt5_password,
            $request->mt5_server
        ));

        return response()->json(['status' => true, 'message' => 'Funded account updated'], 200);
    }

    /**
     * Remove the specified funded account from storage.
     */
    public function destroy(FundedAccount $fundedAccount)
    {
        //
    }
}
