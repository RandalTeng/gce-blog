<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/28 14:08
 * @author randal
 */

namespace common\controllers;

use yii\web\Controller;

/**
 * Class BaseController
 * @package open\controllers
 */
abstract class BaseController extends Controller
{
    /**
     * @inheritDoc
     */
    public function init()
    {
        parent::init();
        $this->enableCsrfValidation = false;
    }
}
