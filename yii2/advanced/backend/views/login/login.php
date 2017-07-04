<?php use yii\bootstrap\ActiveForm; ?>
<?php use yii\helpers\Html; ?>
<?php use backend\assets\LoginAsset; ?>
<?php LoginAsset::register($this); ?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>用户登陆</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<div class="main-wthree">
    <div class="container">
        <div class="sin-w3-agile">
            <h2>用户登陆</h2>
            <?php $form = ActiveForm::begin([
                'action'=>['login/login'],
                'fieldConfig'=>[
                    'template'=>'{input}{error}',
                ],
            ]); ?>
                <div class="username">
                    <span class="username">账号:</span>
                    <?php echo $form->field($model,'admin_user')->textInput(['class'=>'name','placeholder'=>"请填写管理员账号"]) ?>
                    <div class="clearfix"></div>
                </div>
                <div class="password-agileits">
                    <span class="username">密码:</span>
                    <?php echo $form->field($model,'admin_pass')->textInput(['class'=>'password','placeholder'=>"请填写管理员密码"]) ?>
                    <div class="clearfix"></div>
                </div>
                    <?php echo $form->field($model,'rememberMe')->checkbox([
                        'name'=>'remember',
                        'class'=>'remember',
                        'template'=>'<div class="rem-for-agile">{input}记住我<br><a href="#">忘记密码</a><br></div>'
                    ]) ;?>
                <div class="login-w3">
                    <input type="submit" class="login" value="登陆">
                </div>
                <div class="clearfix"></div>
           <?php ActiveForm::end(); ?>
            <div class="back">
                <a href="index.html">回到主页</a>
            </div>
            <div class="footer">
                <p>&copy; 2016 Pooled . All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
    </div>
</div>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>