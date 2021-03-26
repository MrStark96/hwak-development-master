<?php

return [
    'driver' => env('smtp', "smtp"),
    'host' => env( 'MAIL_HOST', "smtp.gmail.com"),
    'port' => env('MAIL_PORT', 587),
    'from' => array(
        'address' => env('MAIL_FROM_ADDRESS', 'montanajagger1995@gmail.com'),
        'name' => env('MAIL_USERNAME', 'montanajagger')
    ),
    'username' => env('MAIL_USERNAME', 'montanajagger'),// your username,
    'password' => env('MAIL_PASSWORD', 'cjhp@ssw)rd'), // your password,
    'sendmail' => "/usr/sbin/sendmail -bs",
    'encryption' => env('MAIL_ENCRYPTION', 'tls'),
    'pretent' => false
];
