<?php

namespace frontend\controllers;

use frontend\models\Authors;
use Yii;


class AuthorsController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Authors();

        if($model->load(Yii::$app->request->post()) && $model->save())
        {
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect('index.php?r=authors%2Findex');
        }

        return $this->render('create', ['model' => $model]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $authors = Authors::find()->all();

        return $this->render('index', ['authors' => $authors]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
