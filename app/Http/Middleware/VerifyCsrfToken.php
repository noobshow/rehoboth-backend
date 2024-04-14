<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'stripe/*',
        'post-register',
        'post-login',
        'post-forgot-password',
        'post-reset-password',
        'activate-funded-account',
        'update-funded-account',
        /* chats */
        'send-chat-message',
        // stripe-charges
        '/stripe-charge',
        '/update-optimus-pro-data',
        '/update-trades-data',
        '/update-news-data',
        '/update-cdl-data',
        '/update-total-pips',
        '/update-alert',
    ];
}
