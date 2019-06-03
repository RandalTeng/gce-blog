<?php
/**
 * Created By PhpStorm.
 * @createdAt 2019-06-03 16:14
 * @author randal
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\Response;

/**
 * Class CommonController
 * @package frontend\controllers
 */
abstract class CommonController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [];
    }

    /**
     * JSON返回数据
     * @param int $code 业务返回码
     * @param string $message 业务结果信息
     * @param array $data 业务返回值
     * @param int $httpStatus 请求返回码
     * @return Response
     */
    public function json($code, $message, $data = [], $httpStatus = 200)
    {
        $data = [
            'code' => $code,
            'message' => $message,
            'data' => is_array($data) ? $data : [],
        ];
        if ($httpStatus !== 200 && array_key_exists($httpStatus, Response::$httpStatuses)) {
            Yii::$app->getResponse()->setStatusCode($httpStatus);
            $data['status'] = $httpStatus;
        } else {
            $data['status'] = 200;
        }
        return $this->asJson($data);
    }
}
