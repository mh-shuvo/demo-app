<?php
return [
    'name' => 'Demo App',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.mailtrap.io',
        'username' => 'a03a00dfa4520f',
        'password' => '8da06a2aadaad3',
        'port' => '2525',
    ],

];
