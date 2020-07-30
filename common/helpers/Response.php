<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/29 17:29
 * @author randal
 */

namespace common\helpers;

use Yii;
use yii\console\Response as ConResponse;
use yii\web\Response as WebResponse;
use yii\base\BaseObject;

/**
 * Class Response
 * @package common\helpers
 */
class Response extends BaseObject implements ResponseConstant
{
    /**
     * 返回json
     * @param int $error
     * @param string|int $code
     * @param string $message
     * @param array $data
     * @return ConResponse|WebResponse
     */
    public static function json($error, $code, $message, $data = [])
    {
        $response = Yii::$app->getResponse();
        $response->format = WebResponse::FORMAT_JSON;
        $data = [
            'is_error' => $error,
            'code' => $code,
            'message' => $message,
            'date' => $data,
        ];
        $response->data = $data;
        if ($error && in_array($code, array_keys(WebResponse::$httpStatuses))) {
            $response->setStatusCode($code);
        }
        return $response;
    }

    /**
     * 返回RAW原始数据
     * @param string $raw
     * @param int $status
     * @return ConResponse|WebResponse
     */
    public static function raw($raw, $status = self::HTTP_CODE_OK)
    {
        $response = Yii::$app->getResponse();
        $response->format = WebResponse::FORMAT_RAW;
        $response->data = $raw;
        $response->setStatusCode($status);
        return $response;
    }
}
