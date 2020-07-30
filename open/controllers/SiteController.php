<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/29 12:20
 * @author randal
 */

namespace open\controllers;

use common\controllers\BaseController;
use common\helpers\Response;

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
        return Response::json(Response::ERROR_FALSE, Response::HTTP_CODE_OK, 'ok');
    }

    /**
     * 错误控制
     */
    public function actionError()
    {
        return 'failed';
    }
}
