<?php
return [
    'ServiceURL'     => env('ECPAY_SERVICE_URL', ''),
    'MerchantId'     => env('ECPAY_MERCHANT_ID', ''),
    'HashKey'        => env('ECPAY_HASH_KEY', ''),
    'HashIV'         => env('ECPAY_HASH_IV', ''),
    'InvoiceHashKey' => env('ECPAY_INVOICE_HASH_KEY', ''),
    'InvoiceHashIV'  => env('ECPAY_INVOICE_HASH_IV', ''),
    'SendForm'       => env('ECPAY_SEND_FORM', null),
    'IsC2C'          => env('ECPAY_C2C_MODE', false),
];
