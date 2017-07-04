<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/28
 * Time: 21:54
 */
namespace console\controllers;
use common\models;
class InitController extends \yii\console\controller{
    public function  actionUser(){
        echo "Create init User ...\n";
        $userName = $this->prompt('Input UserName');
        $email = $this->prompt("Input Email $userName :");
        $password = $this->prompt("Input Password for $userName");
        $model = new models\User();
        $model->username = $userName;
        $model->email = $email;
        $model->password = $password;
        if(!$model->save()){
            foreach($model->getErrors() as $errors){
                    foreach($errors as $e){
                            echo "$e\n";
                    }
               }
            return 1;
        }else{
            return 0;
        }
}
}