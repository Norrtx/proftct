
<?php 
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\personal;
$id = Yii::$app->request->get('id');
$personal=personal::find()->where(['user_id' => $id])
->one();
$home = ['/site/index'];
?>
 

<div class="wrap">
    <?php
    if($id){
    NavBar::begin([
       
            'brandUrl' => Yii::$app->homeUrl  ,
        'brandUrl' => ['site/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'About', 'url' => ['/site/index']],
        
        ['label' => 'Port', 'url' => ['/site/port']],
       
        // ['label' => 'Awards', 'url' => ['/site/awards']],
        ['label' => 'Education', 'url' => ['/site/education']],
        ['label' => 'Skills', 'url' => ['/site/skills']],
        //['label' => 'Team', 'url' => ['/site/team']],

        // ['label' => 'Experience', 'url' => ['/site/experience']],
        ['label' => 'Contact', 'url' => ['/site/contact']],

    ];
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    }if($home){
       echo Url::to(['site/education']);
    }
    ?>
    