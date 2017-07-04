<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2
 * Time: 22:23
 */
namespace backend\controllers;
use yii\web\Controller;
class IndexController extends Controller{
    public $layout = 'main';
    public function actionIndex(){
        return $this->render('index');
    }
}