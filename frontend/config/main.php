<?php
$params = \yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'enableCsrfValidation' => false,
            'parsers' => [
                'application/json' => \yii\web\JsonParser::class,
            ]
        ],
        'user' => [
            'class' => \yii\web\User::class,
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
            'enableSession' => false
        ],
        'session' => [
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
            'suffix' => '.html',
        ],
    ],
    'params' => $params,
];
