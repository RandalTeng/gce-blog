<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/28 16:32
 * @author randal
 */

namespace common\helpers;

use Yii;
use yii\base\BaseObject;
use yii\web\HeaderCollection;
use yii\web\Response;

/**
 * Class Request
 * @package common\helpers
 */
class Request extends BaseObject
{
    /**
     * 获取请求参数
     * @param string $key
     * @param mixed $default
     * @param string $method
     * @return mixed
     */
    public static function getParam($key, $default = null, $method = null)
    {
        if (empty($key)) {
            return false;
        }

        if ($method && is_string($method)) {
            switch (strtolower($method)) {
                case 'get':
                case 'post':
                    return Yii::$app->getRequest()->$method($key, $default);
                    break;
                default:
                    return false;
                    break;
            }
        }

        $param = Yii::$app->getRequest()->get($key);
        if (is_null($param)) {
            $param = Yii::$app->getRequest()->post($key, $default);
        }

        return $param;
    }

    /**
     * 获取数值参数
     * @param string $key
     * @param int $default
     * @param string $method
     * @return int|float
     */
    public static function getNumericParam($key, $default = 0, $method = null)
    {
        return static::getParam($key, $default, $method) + 0;
    }

    /**
     * 获取字符串参数
     * @param string $key
     * @param string $default
     * @param string $method
     * @return int|float
     */
    public static function getStringParam($key, $default = '', $method = null)
    {
        return strval(trim(static::getParam($key, $default, $method)));
    }

    /**
     * 获取数组参数
     * @param $key
     * @param array $default
     * @param null $method
     * @return array|HeaderCollection
     */
    public static function getArrayParam($key, $default = [], $method = null)
    {
        $param = static::getParam($key, $default, $method);
        if (is_array($param)) {
            return $param;
        }
        return [$param];
    }

    /**
     * 获取请求头信息
     * @param string|null $key
     * @param mixed $default
     * @return mixed|HeaderCollection
     */
    public static function getHeader($key, $default = null)
    {
        $header = Yii::$app->getRequest()->getHeaders();
        if (is_null($key)) {
            return $header;
        } elseif (is_string($key)) {
            return $header->get($key, $default);
        } else {
            return $default;
        }
    }
}
