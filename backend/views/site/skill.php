<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Skill';
?>

<form action="<?= Url::to('skill') ?>" method="post" class="was-validated"><br>

  <div class="form-group">
   
<div class="mb-4">
    <label for="validationTextarea">Name</label>
    <textarea name="namem" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div><br>
    <div class="mb-0 ">
    <label for="validationTextarea">Score</label>
    <textarea name="score" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div><br>
 
  <button class="btn btn-primary" type="submit">Submit form</button>
</form><br><br>

</div>