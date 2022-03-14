<?php


return [

        "from" => env('ZEPSON_SMS_FROM', ''),
        "apiKey" => env('ZEPSON_SMS_API_KEY', ''),
        "environment" => env('ZEPSON_SMS_ENVIRONMENT', 'sandbox'),
        "country_code" => env('ZEPSON_SMS_COUNTRY_CODE', '255'),

];
