<?php
/**
 * Created by PhpStorm.
 * User: randal
 * Date: 2019/4/3
 * Time: 22:52
 */

namespace mp\controllers;


class CategoryController extends BaseController
{
    /**
     * 获取分类信息列表
     */
    public function actionGetList()
    {
        return $this->json(200, '获取成功', ['categoriesList' => [
            ['id' => 1, 'name' => '最新1'],
            ['id' => 2, 'name' => '最新2'],
            ['id' => 3, 'name' => '最新3'],
            ['id' => 4, 'name' => '最新4'],
            ['id' => 5, 'name' => '最新5'],
            ['id' => 6, 'name' => '最新6'],
            ['id' => 7, 'name' => '最新7'],
        ]]);
    }
}