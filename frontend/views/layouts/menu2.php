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

AppAsset::register($this);
?>   
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" align="center">
    <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"> -->
      <!-- <span class="d-block d-lg-none"></span> -->
      <!-- <span class="d-none d-lg-block"> -->
      <img class="circle"  class="img-fluid img-profile rounded-circle mx-auto mt-2" src="<?=Url::to(['img/profile1.jpg']);?>" align="center" alt=""><br>
      <!-- </span> -->
    <!-- </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <div class="nav-item"><br>
         <a class="nav-link js-scroll-trigger"  href="<?=Url::to(['site/index'])?> "> About</a></div><br>
               <div class="nav-item">
                      <div class="nav-item">
             <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/education'])?>">Education</a><br>
              </div>
                    <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/skills'])?>">Skills</a><br>
        </div>
                       <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/contact'])?>">Contact</a><br>
        </div>
     
    
       
      </ul>
    </div>
  </nav>

