<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'discription')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'zip')->textInput() ?>
    <?= $form->field($model, 'latitude')->textInput() ?>
    <?= $form->field($model, 'longitude')->textInput() ?>
    <?= $form->field($model, 'user_id')->textInput(['disabled' => 'disabled']) ?>
    <div class="custom-file">
    <input type="file" name="pro_img2" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <?= $form->field($model, 'created_at')->textInput() ?>
    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
