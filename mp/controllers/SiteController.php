<?php
namespace mp\controllers;


/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->json(200, '响应成功');
    }
}
