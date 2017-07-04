<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/2
 * Time: 22:10
 */
namespace backend\controllers;
use yii;
use backend\models\Admin;
use yii\web\Controller;
class LoginController extends Controller{
    public $layout =false;
    public $defaultAction = 'login';

    public function actionLogin(){
        $model = new Admin();
        if(Yii::$app->request->isPost){
            $post = Yii::$app->request->post();
            if($model->login($post)){
                $this->redirect(['index/index']);
                Yii::$app->end();
            }
        }
        return $this->render('login',['model'=>$model]);
    }

    public function actionLogout(){
        Yii::$app->session->removeAll();
        if(!isset(Yii::$app->session['admin']['isLogin'])){
            $this->redirect(['login/login']);
            Yii::$app->end();
        }
             $this->goBack();
    }
}