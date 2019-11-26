<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\skill */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="skill-form">

    <?php $form = ActiveForm::begin(); ?>

     
   <div class="mb-4">
       <label for="validationTextarea">Name</label>
        <select   name=namem  class="custom-select custom-select-lg mb-3">
     
     <option value="CODING" >CODING</option>
     <option value="PROGRAMMING LANGUAGES">PROGRAMMING LANGUAGES</option>
     <option value="TEXT EDITORS">TEXT EDITORS</option>
     <option value="DATABASES">DATABASES</option>
     <option value="NETWORKING BASICS">NETWORKING BASICS</option>
   </select>
   
       </div><br>
       <div class="mb-0 ">
       <label for="validationTextarea">Score</label>
       <textarea name="score" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
       required="" style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
       <div class="invalid-feedback">
         Please enter a message in the textarea.
       </div><br>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
