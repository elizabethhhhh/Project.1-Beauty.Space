<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Services4;

class Services4Controller extends Controller
{
    public function actionIndex()
    {
        $query = Services4::find();

        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count(),
        ]);

        $service4 = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'service4' => $service4,
            'pagination' => $pagination,
        ]);
    }
}