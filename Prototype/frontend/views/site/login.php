<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <div class="login-box">
        <div class="login-logo">
            <center><img src="http://ireport.ph/assets/images/demo/ndrrmc.png" width="223" height="149"/></center>
            <hr zize="10px"/>
            <h3><a href="index.php"><b>Logistics </b></a></h3>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">SIGN IN</p>
                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username', ['options'=>[
                    'tag' => 'div',
                    'class' =>'form-group field-loginform-username has-feedback required'
                ],
                    'template'=>'{input}<span class="glyphicon glyphicon-user form-control-feedback"></span>
                                             {error}{hint}'
                ])->textInput(['placeholder'=>'Username'])
                ?>

                <?= $form->field($model, 'password', ['options'=>[
                    'tag' => 'div',
                    'class' =>'form-group field-loginform-password has-feedback required'
                ],
                    'template'=>'{input}<span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                             {error}{hint}'
                ])->passwordInput(['placeholder'=>'Password']) ?>

                <a href="index.php?r=site/signup" class="text-center">SIGN UP</a>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>


                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>


                <div class="form-group">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>


                <?php ActiveForm::end(); ?>

        </div>
    </div>

</div>
