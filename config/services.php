<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'google' => [
        'client_id' => '874927845773-h23h1v4udq2hctk7kr6om8b8hl98iqcc.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://lifeadvice.ca/auth/google/callback',
    ],
    'twilio' => [
      'sid' => env('TWILIO_AUTH_SID'),
      'token' => env('TWILIO_AUTH_TOKEN'),
      'whatsapp_from' => env('TWILIO_WHATSAPP_FROM')
    ],
];
