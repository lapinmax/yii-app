<?php

namespace frontend\controllers;

use frontend\models\Books;
use Yii;

class BooksController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Books();

        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success', 'Books added');
            return $this->redirect('index.php?r=books%2Findex');
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $books = Books::find()->all();

        if (!$books){
            return $this->render('index', ['books' => $books]);
        }

    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
