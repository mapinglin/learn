<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/1
 * Time: 22:31
 */
namespace frontend\controllers;
use yii\web\Controller;
class IndexController extends Controller{
    public $layout = 'main';
    public function actionIndex(){
        return $this->render('index');
    }
}