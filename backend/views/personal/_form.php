<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin([
    'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

    <!-- <?= Html::beginForm(Url::to(['/product/page/updatesalepage' ]), 'post', ['enctype' => 'multipart/form-data',  ]); ?> -->
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
                                                    <input name="city" type="text" class="form-control" placeholder="Prefecture"><br>
                                                </div>
                                                <div class="col">
                                                     <input name="state" type="text" class="form-control" placeholder="State">
                                                </div><br>
                                                                         <div class="col">
                                                                             <input name="zip" type="text" class="form-control" placeholder="zip code">
                                                                        </div><br>
                                                                        <div class="col">
                                                                             <input name="latitude" type="text" class="form-control" placeholder="latitude">
                                                                        </div><br>
                                                                        <div class="col">
                                                                             <input name="longitude" type="text" class="form-control" placeholder="longitude">
                                                                        </div>                                                                                                                         
                                                                </div><br><br>
                                                                               <div class="form-group">
                                                                                       <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                                                               </div>
                                                                               
                                                                      <?php ActiveForm::end(); ?>
        <!-- <?= HTml::endForm(); ?> -->

</div>
