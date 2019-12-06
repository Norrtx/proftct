<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\personal;
AppAsset::register($this);
$id = Yii::$app->request->get('id');
$personal=personal::find()->where(['user_id' => $id])
->one();
$path = Url::to(["/uploads"]) ."/". str_pad($id, 5, '0', STR_PAD_LEFT) . "/";
if($id != null) {
 ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" align="center">
<img  class="circle" src="<?=$path.$personal->pro_img?>" align="center" alt=""><br>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <div class="nav-item"><br>
         <a class="nav-link js-scroll-trigger"  href="<?=Url::to(['site/index','id'=>$id])?> ">About</a></div><br>
               <div class="nav-item">
                    <div class="nav-item">
             <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/education','id'=>$id])?>">Education</a><br>
              </div>
                    <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/skill','id'=>$id])?>">Skills</a><br>
        </div>
                    <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/contact','id'=>$id])?>">Contact</a><br>
        </div>
           
      </ul>
    </div>
  </nav>

<?php } ?>