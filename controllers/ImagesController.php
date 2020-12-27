<?php

namespace frontend\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use frontend\models\Images;

class ImagesController extends Controller
{
    public function actionIndex()
    {
        $query = Images::find();
        $pagination = new Pagination(['defaultPageSize' => 10, 'totalCount' => $query->count()]);

        $images = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('index', ['images' => $images, 'pagination' => $pagination]);
    }
}
