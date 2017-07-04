<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/9
 * Time: 23:07
 */
namespace backend\assets;
use yii\web\AssetBundle;

class LoginAsset extends AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css =[
        'assets/css/bootstrap.min.css',
        'assets/css/style.css',
        'assets/css/font-awesome.css',
        'assets/css/jquery-ui.css',
        'assets/css/icon-font.min.css'
    ];
    public $js = [
        'assets/js/jquery-2.1.4.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
