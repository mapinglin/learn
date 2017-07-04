<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2
 * Time: 21:50
 */
namespace frontend\controllers;
use yii\web\Controller;
class ProductController extends Controller{
    public $layout = 'main1';
    public function actionIndex(){
       return $this->render('index');
    }
}