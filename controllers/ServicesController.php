<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services;

class ServicesController extends Controller
{
    public function actionIndex()
    {
        $query = Services::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service' => $service,
            'pagination' => $pagination,
        ]);
    }
}