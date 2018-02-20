<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\models\Barangay;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="login-box">
        <div class="login-logo">
            <img src="http://i1044.photobucket.com/albums/b444/jgtadeo/Logistics/ndrrmc_philippines_zpsg4b7xek4.png" width="120" height="90"/><br/>
            <hr zize="10px"/>
            <h3><a href="index.php"><b>Logistics </b></a></h3>
        </div>

        <p align="center">Please fill out the following fields to signup:</p>

        <div class="login-box-body">

                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'options'=>['enctype'=>'multipart/form-data']]); ?>


                    <div class="col-md-4">
                        <?= $form->field($model, 'first_name') ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'middle_name')->textInput(['autofocus' => true] ) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'last_name') ?>
                    </div>


                    <div class="col-md-4">
                        <?= $form->field($model, 'username')->textInput() ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'password')->passwordInput() ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'email') ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'contact') ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'birth_year') ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'organization') ?>
                    </div>
                    <div class="col-md-4">
                        <?= $form->field($model, 'image')->fileInput() ?>
                    </div>



                    <div class="col-md-4">
                        <?= $form->field($model, 'marital_status')->dropDownList(
                            [ 'Single' => 'Single', 'Married' => 'Married'], ['prompt' => 'Select Status']) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'active_inactive')->dropDownList(
                            [ 'Active' => 'Active', 'Inactive' => 'Inactive'], ['prompt' => 'Select Status']) ?>
                    </div>

                    <div class="col-md-4">
                        <?= $form->field($model, 'type')->dropDownList(
                            [ 'National' => 'National', 'Regional' => 'Regional', 'Municipal' => 'Municipal', 'External' => 'External'], ['prompt' => 'Select Type of the user']) ?>
                    </div>



                    <div class="col-md-3">
                        <?= $form->field($model, 'barangay')->dropDownList(
                            ArrayHelper::map(Barangay::find()->all(), 'name', 'name'),
                            [
                                'prompt' => 'Select Barangay',

                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'city_municipal')->dropDownList(
                            ArrayHelper::map(Barangay::find()->all(), 'city_municipal', 'city_municipal'),
                            [
                                'prompt' => 'Select City / Municipal',

                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'province')->dropDownList(
                            ArrayHelper::map(Barangay::find()->all(), 'province', 'province'),
                            [
                                'prompt' => 'Select Province',

                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'region')->dropDownList(
                            ArrayHelper::map(Barangay::find()->all(), 'region', 'region'),
                            [
                                'prompt' => 'Select Region',

                            ]);?>
                    </div>




                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
