<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        
    ];
    public $js = [
        'AdminLTE-3.0.0/plugins/jquery/jquery.min.js',
        'AdminLTE-3.0.0/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'AdminLTE-3.0.0/dist/js/adminlte.min.js',
        'AdminLTE-3.0.0/dist/js/demo.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
