<?php

/* @var $this yii\web\View */
use yii\helpers\Url;
$this->title = 'resume';

?>
<div class="site-index">
    <!-- About -->
<section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="contsiner">
        </div>
<div class="w-100">
  <br><br><br><br><br><br>                      
        <h1 class="mb-0">Resume
          <span class="text-primary"><?= $personalModel->name ?></span>
        </h1>
        <div class="subheading mb-5">Email-
          <a href="north_l@email.com"><?= $personalModel->mail ?></a>
        </div>
        
        <p class="lead mb-5"><?= $personalModel->discription ?> </p>
        <div class="social-icons">
       
          <a href="<?= $personalModel->link ?>">
          
            <i  class="fab fa-github"> Git </i>
              
          </a>
         
        
          </a>
        </div>
      </div>
    </section>

 
</div>
