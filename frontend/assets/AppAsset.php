<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'css/bootstrap-theme.css',
        'css/bootstrap-theme.min.css',
        'style/style.css',
        
    ];
    public $js = [
    'js/bootstrap.js',
    'js/bootstrap.min.js',
    'js/jQuery.js',
    //'js/less2.7.1.min.js',
    //'js/npm.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
