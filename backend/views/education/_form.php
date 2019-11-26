<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\education */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="education-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="mb-4">

    
    
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'major')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gpa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>
  

    


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
