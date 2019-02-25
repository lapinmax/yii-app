<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<h1>Add author</h1>

<?php $form = ActiveForm::begin()?>

  <?php echo $form->field($model, 'full_name')?>

  <?php echo Html::submitButton('save', ['class'=>'btn btn-success'])?>

<?php ActiveForm::end()?>


