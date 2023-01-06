<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services2;

class Services2Controller extends Controller
{
    public function actionIndex()
    {
        $query = Services2::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service2 = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service2' => $service2,
            'pagination' => $pagination,
        ]);
    }
}