<?php

return [
    // Set to 'true' for production environment 
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    
    // Your Midtrans server key from dashboard
    'server_key' => env('MIDTRANS_SERVER_KEY', ''),
    
    // Your Midtrans client key from dashboard
    'client_key' => env('MIDTRANS_CLIENT_KEY', ''),
    
    // For 3DS transactions
    'enable_3ds' => true,
    
    // For sanitizing request parameters
    'sanitize' => true,
    
    // Notification URL (optional - can use the route we've defined)
    'notification_url' => env('MIDTRANS_NOTIFICATION_URL', ''),
    
    // Set default payment type (optional)
    'default_payment_type' => env('MIDTRANS_DEFAULT_PAYMENT_TYPE', ''),
];