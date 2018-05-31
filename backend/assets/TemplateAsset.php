<?php

namespace backend\assets;

use yii\web\AssetBundle;

class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'assets_template/css/lib/themify-icons.css',
        'assets_template/css/lib/menubar/sidebar.css',
        'assets_template/css/style.css',


//        'css/site.css',

    ];

    public $js= [
        'assets_template/js/lib/jquery.nanoscroller.min.js',
        'assets_template/js/lib/menubar/sidebar.js',
        'assets_template/js/scripts.js',
//        'assets_template/js/lib/jquery.min.js',

    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}