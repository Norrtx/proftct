<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Education';
?>
<form action="<?= Url::to('education') ?>" method="post" class="was-validated"><br>

  <div class="form-group">
   
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
    <textarea name="dete" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 888px 0px 0px; height: 90px; width: 253px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>

  <button class="btn btn-primary" type="submit">Submit form</button>
</form><br><br>

</div>
