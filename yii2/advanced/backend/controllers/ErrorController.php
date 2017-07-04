<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/8
 * Time: 23:40
 */
namespace backend\controllers;
use yii\web\Controller;
use yii;
class ErrorController extends Controller{
        public function actionError()
    {
        $exception = Yii::$app->errorHandler->exception;
        if ($exception !== null) {
            return $this->render('error', ['exception' => $exception]);
        }
    }
}