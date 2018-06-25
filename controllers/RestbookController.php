<?php

namespace app\controllers;

use yii\rest\ActiveController;
use app\models\Book;

Class RestbookController extends  ActiveController{

    public $modelClass= 'app\models\Book';

    public function behaviors(){
    return [
        [
            'class' => \yii\filters\ContentNegotiator::className(),
            'formats' => [
                'application/json' => \yii\web\Response::FORMAT_JSON,
            ],
        ],
    ];
    }

    public function actionList()
    {
        $searchModel = new Book();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }



}