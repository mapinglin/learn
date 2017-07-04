<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 23:06
 */

namespace backend\assets;
use yii\web\AssetBundle;
class IndexAsset extends AssetBundle{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'assets/css/bootstrap.min.css',
        'assets/css/style.css',
        'assets/css/morris.css',
        'assets/css/font-awesome.css',
        'assets/css/icon-font.min.css'
    ];
    public $js = [
        'assets/js/jquery-2.1.4.min.js',
        'assets/js/jquery.nicescroll.js',
        'assets/js/scripts.js',
        'assets/js/bootstrap.min.js',
        'assets/js/raphael-min.js',
        'assets/js/morris.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}