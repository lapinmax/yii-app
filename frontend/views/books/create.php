<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

  <h1>Add book</h1>

<?php $form = ActiveForm::begin()?>

  <?=$form->field($model, 'title')?>
  <?=$form->field($model, 'author')?>
  <?=$form->field($model, 'date_publication')?>

  <?=Html::submitButton('save', ['class'=>'btn btn-success'])?>

<?php ActiveForm::end()?>