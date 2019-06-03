<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=mysql;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'redis' => [
            'class' => \yii\redis\Connection::class,
            'hostname' => 'redis',
            'port' => 6379,
            'password' => null,
            'database' => 0,
        ],
        'cache' => [
            'class' => \yii\redis\Cache::class,
        ],
    ],
];
