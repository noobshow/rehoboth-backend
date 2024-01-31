<?php

return [
    // Authentication token for publishing Optimus Pro Signals
    'optimus_pro_token' => env('OPTIMUS_PRO_TOKEN'),

    // Stripe "Get Funded" Product ID
    'product_get_funded' => env('PRODUCT_GET_FUNDED'),
    // Stripe "Get Funded" Price IDs
    'price_get_funded_80k' => env('PRICE_GET_FUNDED_80K'),
    'price_get_funded_60k' => env('PRICE_GET_FUNDED_60K'),
    'price_get_funded_40k' => env('PRICE_GET_FUNDED_40K'),
    'price_get_funded_20k' => env('PRICE_GET_FUNDED_20K'),

    // Stripe "Optimus Pro" Product ID
    'product_optimus_pro' => env('PRODUCT_OPTIMUS_PRO'),
    // Stripe "Optimus Pro" Price IDs
    'price_optimus_pro_premium' => env('PRICE_OPTIMUS_PRO_PREMIUM'),
    'price_optimus_pro_standard' => env('PRICE_OPTIMUS_PRO_STANDARD'),
    'price_optimus_pro_basic' => env('PRICE_OPTIMUS_PRO_BASIC'),
];
