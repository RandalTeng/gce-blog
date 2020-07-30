<?php
/**
 * Created By PhpStorm.
 * @createdAt 2020/7/28 14:07
 * @author randal
 */

namespace open\controllers;

use common\controllers\BaseController;
use common\helpers\Request;
use common\helpers\Response;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Yii;
use yii\base\Exception;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\web\ServerErrorHttpException;

/**
 * Class PhpVersionController
 * @package open\controllers
 */
class OpenApiController extends BaseController
{
    private const PHP_DOMAIN = 'https://www.php.net/';

    /**
     * 首页
     */
    public function actionIndex()
    {
        return Response::json(Response::ERROR_FALSE, Response::HTTP_CODE_OK, 'ok');
    }

    /**
     * 获取最新PHP版本下载地址
     * @return \yii\web\Response
     */
    public function actionFetchPhpDownloadUrl()
    {
        $version = Request::getStringParam('version');
        $fetchPath = '/releases/';
        $client = new Client(['base_uri' => static::PHP_DOMAIN]);
        try {
            $query = ['json' => true, 'max' => 1];
            if (!empty($version)) {
                $query['version'] = $version;
            }
            $response = $client->get($fetchPath, [
                RequestOptions::QUERY => $query,
            ]);
            if ($response->getStatusCode() !== 200) {
                return Response::json(Response::ERROR_TRUE, $response->getStatusCode(), '请求release接口失败');
            }
        } catch (GuzzleException $e) {
            return Response::json(Response::ERROR_TRUE, $e->getCode(), $e->getMessage());
        }
        try {
            $versions = Json::decode($response->getBody()->getContents());
            if ($error = ArrayHelper::getValue($versions, 'error')) {
                throw new ServerErrorHttpException($error, Response::HTTP_CODE_ERROR_SERVER_ERROR);
            }
        } catch (Exception|\Exception $e) {
            Yii::error($e);
            return Response::json(Response::ERROR_TRUE, $e->getCode(), $e->getMessage());
        }
        $latestVersion = array_shift($versions);
        $fileInfo = array_pop($latestVersion['source']);

        $downloadPath = 'https://www.php.net/distributions/';
        return Response::raw($downloadPath . $fileInfo['filename']);
    }
}
