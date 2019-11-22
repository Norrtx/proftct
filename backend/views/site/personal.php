<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'Personal';
?>
<form action="<?= Url::to('personal') ?>" method="post" class="was-validated"><br>

  <div class="form-group">
   
<div class="mb-4">
    <label for="validationTextarea">Name</label>
    <textarea name="namem" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div><br>
    <div class="mb-0 ">
    <label for="validationTextarea">Mail</label>
    <textarea name="mail" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div><br>
    <div class="mb-0 ">
    <label for="validationTextarea">Description</label>
    <textarea name="description" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
     style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div><br>
    <div class="mb-0 ">
    <label for="validationTextarea">Link</label>
    <textarea name="link" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" 
    style="margin: 0px 820px 0px 0px; height: 56px; width: 321px;"></textarea>
    <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div>
    <div class="form-row">
    <div class="col-7">
      <input name="city" type="text" class="form-control" placeholder="City"><br>
        </div>
    <div class="col">
      <input name="state" type="text" class="form-control" placeholder="State">
    </div><br>
    <div class="col">
      <input name="zip" type="text" class="form-control" placeholder="Zip">
    </div>
  </div><br><br>
  <button class="btn btn-primary" type="submit">Submit form</button>
</form><br><br>
</div>
