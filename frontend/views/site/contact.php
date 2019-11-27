<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
      <div class="w-100">
        <h2 class="mb-5">ที่อยู่</h2>
        <ul class="fa-ul mb-0">
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?= $personalModel->city ?><hr><?= $personalModel->state ?><hr><?= $personalModel->zip ?></li>
            <!-- <i class="fa-li fa fa-trophy text-warning">โทร 0631896197</i> -->
           
          </ul>
     
        <div class="col-xs-12"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d987.6116628354984!2d
        <?= $personalModel->longitude ?>!3d<?= $personalModel->latitude ?>!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d
        <?= $personalModel->latitude ?>!2d<?= $personalModel->longitude ?>!5e1!3m2!1sen!2sth!4v1574764346603!5m2!1sen!2sth"
           width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
      </div>
      <!-- <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:  <?= $personalModel->latitude ?>, lng:<?= $personalModel->longitude ?>},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCYtAUFis6mljpxY-uulAfJrmW2xHgLIg&callback=initMap"
    async defer></script> -->
<!-- Contact -->
<!-- <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> -->