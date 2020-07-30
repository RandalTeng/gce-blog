<?php
$dbComponents = require __DIR__ . '/db.php';

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => \yii\helpers\ArrayHelper::merge([
        'request' => [
            'enableCsrfValidation' => false,
            'parsers' => [
                'application/json' => \yii\web\JsonParser::class,
            ]
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'enableSession' => false
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
                [
                    'class' => 'yii\log\FileTarget',
                    'categories' => ['debug'],
                    'levels' => ['error', 'warning', 'info'],
                    'logVars' => ['_SERVER', '_POST', '_GET'],
                    'logFile' => '@runtime/logs/debug.log'
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],

        'cache' => [
            'class' => \yii\redis\Cache::class,
        ],
    ], $dbComponents)
];
