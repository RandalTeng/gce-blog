<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/29 12:25
 * @author randal
 */

return [
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
];
