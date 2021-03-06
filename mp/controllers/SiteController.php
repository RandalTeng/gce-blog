<?php
namespace mp\controllers;

use Yii;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends BaseController
{
    /**
     * Home page data.
     * @return Response
     */
    public function actionIndex()
    {
        $articleList = [
            [
                'no' => '00002149',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题49',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
            [
                'no' => '00002150',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题50',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
            [
                'no' => '00002151',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题51',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
            [
                'no' => '00002152',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题52',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
            [
                'no' => '00002153',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题53',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
        ];
        $pageInfo = [
            'current_page' => 1,
            'page_count' => 2,
            'total_count' => 10,
            'page_size' => 5
        ];
        return $this->json(200, '响应成功', compact('articleList', 'pageInfo'));
    }

    /**
     * Article content data.
     * @return Response
     */
    public function actionContent()
    {
        $articleId = intval($this->getParam('article_id', 0));
        if (empty($articleId)) {
            return $this->json(400, '文章ID不能为空');
        }

        return $this->json(200, '查询成功', [
            'articleInfo' => [
                'no' => '00002149',
                'title' => '[标题]标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题标题49',
                'created_at' => '2019-03-28',
                'views' => 10,
                'pic_list' => [
                    Yii::getAlias('@cdnResource') . '/images/public/1.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/2.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/3.jpg',
                    Yii::getAlias('@cdnResource') . '/images/public/4.jpg',
                ],
            ],
        ]);
    }
}
