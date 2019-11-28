<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Easy Uploads';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="easy-upload-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Easy Upload', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'surname',
            'photo',
            'photos:ntext',
             'user_id',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
