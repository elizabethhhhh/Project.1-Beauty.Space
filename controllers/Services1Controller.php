<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services1;

class Services1Controller extends Controller
{
    public function actionIndex()
    {
        $query = Services1::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service1 = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service1' => $service1,
            'pagination' => $pagination,
        ]);
    }
}