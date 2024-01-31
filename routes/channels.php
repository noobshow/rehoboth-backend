<?php

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

// Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
//     return (int) $user->id === (int) $id;
// });

Broadcast::channel('optimus-pro.signals', function ($user) {
    if ($user instanceof App\Models\User) { // Check if $user is an instance of User model
        // get important data
        $funded_accounts = $user->fundedAccounts;
        $is_funded_account = $funded_accounts->count() > 0;
        $is_valid_optimus_user = $user->subscribedToProduct(config('product.product_optimus_pro'));
        return $is_valid_optimus_user || $is_funded_account || $user->isAdmin();
    }
    return false;
});