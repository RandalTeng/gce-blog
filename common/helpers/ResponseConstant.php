<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/28 16:57
 * @author randal
 */

namespace common\helpers;

use yii\base\Configurable;

/**
 * Class ResponseConstant
 * @package common\helpers
 */
interface ResponseConstant extends Configurable
{
    public const ERROR_TRUE = 1;
    public const ERROR_FALSE = 0;
    public const HTTP_CODE_OK = 200;
    public const HTTP_CODE_OK_NO_CONTENT = 204;
    public const HTTP_CODE_REDIRECT_PARAM = 301;
    public const HTTP_CODE_ERROR_PARAM = 400;
    public const HTTP_CODE_ERROR_UNAUTHORIZED = 401;
    public const HTTP_CODE_ERROR_FORBIDDEN = 403;
    public const HTTP_CODE_ERROR_NOT_FOUND = 404;
    public const HTTP_CODE_ERROR_UNSUPPORTED = 406;
    public const HTTP_CODE_ERROR_SERVER_ERROR = 500;
    public const HTTP_CODE_ERROR_BAD_GATEWAY = 502;
    public const HTTP_CODE_ERROR_SERVER_OUTLINE = 503;
    public const HTTP_CODE_ERROR_TIME_TOO_LONG = 503;
}
