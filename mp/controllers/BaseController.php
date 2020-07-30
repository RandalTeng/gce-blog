<?php
/**
 * Created by PhpStorm.
 * User: randal
 * Date: 2019/4/3
 * Time: 22:00
 */

namespace mp\controllers;

use common\helpers\Request;
use yii\web\Controller;
use yii\web\Response;

abstract class BaseController extends Controller
{

    /**
     * 获取请求参数
     * @param string $key     参数名
     * @param mixed  $default 参数默认值
     * @param string $method  请求方法
     * @return mixed
     * @deprecated
     * @see Request::getParam()
     */
    protected function getParam($key, $default = null, $method = null)
    {
        return Request::getParam($key, $default, $method);
    }

    /**
     * JSON数据响应
     * @param int $code
     * @param string $message
     * @param array $data
     * @return Response
     */
    protected function json(int $code, string $message, array $data = []):Response
    {
        return $this->asJson(compact('code', 'message', 'data'));
    }
}
