<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services5;

class Services5Controller extends Controller
{
    public function actionIndex()
    {
        $query = Services5::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service5 = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service5' => $service5,
            'pagination' => $pagination,
        ]);
    }
}