<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/6
 * Time: 22:41
 */
namespace backend\models;
use yii;
use yii\db\ActiveRecord;
class Admin extends ActiveRecord{
    public $rememberMe = true;
    public static function tableName()
    {
       return "{{%admin}}";
    }
    public function rules()
    {
        return [
            ['admin_user','required','message'=>"管理员账号不能为空"],
            ['admin_pass','required','message'=>"管理员密码不能为空"],
            ['rememberMe','boolean'],
            ['admin_pass','validatePass'],
        ];
    }
    public function validatePass()
    {
        if (!$this->hasErrors()) {
            $data = self::find()->where('admin_user = :user and admin_pass = :pass', [":user" => $this->admin_user, ":pass" => md5($this->admin_pass)])->one();
            if (is_null($data)) {
                $this->addError("admin_pass", "用户名或者密码错误");
            }
        }
    }
    public function login($data)
    {
        if ($this->load($data) && $this->validate()) {
            $lifetime = $this->rememberMe ? 24 * 3600 : 0;
            $session = Yii::$app->session;
            session_set_cookie_params($lifetime);
            $session['admin'] = [
                'admin_user' => $this->admin_user,
                'isLogin' => 1,
            ];
            $this->updateAll(['login_time' => time(), 'login_ip' => ip2long(Yii::$app->request->userIP)], 'admin_user= :user', [':user' => $this->admin_user]);
            return (bool)$session['admin']['isLogin'];
        } else {
            return false;
        }
    }
}