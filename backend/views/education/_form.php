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

    
    <label for="validationTextarea">NAME</label>
    <textarea name="namem" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
    required=""  style="margin: 0px 888px 0px 0px; height: 90px; width: 253px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <div class="mb-0 ">
    <label for="validationTextarea">MAJOR</label>
    <textarea name="Major" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
    style="margin: 0px 888px 0px 0px; height: 90px; width: 253px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <div class="mb-0 ">
    <label for="validationTextarea">GPA</label>
    <textarea name="gpa" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 888px 0px 0px; height: 90px; width: 253px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <div class="mb-0 ">
    <label for="validationTextarea">DATE</label>
    <textarea name="date" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 888px 0px 0px; height: 90px; width: 253px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
