<?php
/**
 * Created by PhpStorm.
 * User: randal
 * Date: 2019/4/3
 * Time: 22:00
 */

namespace mp\controllers;


use yii\web\Controller;
use yii\web\Response;

class BaseController extends Controller
{
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