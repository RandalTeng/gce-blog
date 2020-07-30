<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/29 12:20
 * @author randal
 */

namespace open\controllers;

use common\controllers\BaseController;
use common\helpers\Request;

/**
 * Class SiteController
 * @package open\controllers
 */
class SiteController extends BaseController
{
    /**
     * 首页
     */
    public function actionIndex()
    {
        return Request::json(Request::ERROR_FALSE, Request::HTTP_CODE_OK, 'ok');
    }

    /**
     * 错误控制
     */
    public function actionError()
    {
        return 'failed';
    }
}
