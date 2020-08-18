<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/8/18 20:38
 * @author randal
 */

namespace console\controllers;

use GuzzleHttp\Client;
use Yii;
use yii\helpers\FileHelper;
use yii\log\Logger;

/**
 * Class WController
 * @package console\controllers
 */
class WController extends CommonController
{
    /**
     * 下载网页
     */
    public function actionGet()
    {
        $uri = 'https://huke88.com/';
        $headerPath = 'ajax/nav-software-list';
        $http = new Client(['base_uri' => $uri]);
        $index = $http->get('/');
        $indexFile = Yii::getAlias('@runtime/') . 'logs/wget/' . date('Ymd/') . 'index.'.date('His').'.html';
        FileHelper::createDirectory(pathinfo($indexFile, PATHINFO_DIRNAME));
        file_put_contents($indexFile, $index->getBody(), FILE_APPEND | LOCK_EX);
        $list = $http->get($headerPath);
        $listFile = Yii::getAlias('@runtime/') . 'logs/wget/' . date('Ymd/') . 'index.'.date('His').'.json';
        FileHelper::createDirectory(pathinfo($listFile, PATHINFO_DIRNAME));
        file_put_contents($listFile, $list->getBody(), FILE_APPEND | LOCK_EX);
    }
}
