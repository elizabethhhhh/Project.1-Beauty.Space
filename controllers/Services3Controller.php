<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services3;

class Services3Controller extends Controller
{
    public function actionIndex()
    {
        $query = Services3::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service3 = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service3' => $service3,
            'pagination' => $pagination,
        ]);
    }
}