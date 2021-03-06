<?php

namespace frontend\controllers;

use Yii;
use yii\redis\Connection;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends CommonController
{
    public function init()
    {
        parent::init();
        $this->enableCsrfValidation = false;
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', ['title' => 'Welcome to phpcdr.com.']);
    }

    /**
     * redis 链接测试
     * @return Response
     * @throws \yii\base\InvalidConfigException
     */
    public function actionRedisConnect()
    {
        /** @var Connection $redis */
        $redis = Yii::$app->get('redis');
        $key = 'test:increase:int';
        $result = $redis->incr($key);
        return $this->json(1, '请求成功', ['count' => $result]);
    }
}
