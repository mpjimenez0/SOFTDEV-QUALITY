<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use common\models\Barangay;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\models\Region;
use common\models\Province;
use common\models\CityMunicipal;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <div class="login-box">
        <div class="login-logo">
            <center><img src="http://ireport.ph/assets/images/demo/ndrrmc.png" width="223" height="149"/></center>
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
                        <?= $form->field($model, 'region')->dropDownList(
                            ArrayHelper::map(Region::find()->all(), 'name', 'name'),
                            [
                                'prompt' => 'Select Region',

                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'province')->dropDownList(
                            ArrayHelper::map(Province::find()->all(), 'name', 'name'),
                            [
                                'prompt' => 'Select Province',

                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'city_municipal')->dropDownList(
                            ArrayHelper::map(CityMunicipal::find()->all(), 'name', 'name'),
                            [
                                'prompt' => 'Select City / Municipal',
                                'onchange' => '
                                    $.post(index.php?r=barangay/lists&id='.'"+$(this).val(), function(data){
                                        $("select#models-contact").html(data);
                                    });'
                            ]);?>
                    </div>

                    <div class="col-md-3">
                        <?= $form->field($model, 'barangay')->dropDownList(
                            ArrayHelper::map(Barangay::find()->all(), 'name', 'name'),
                            [
                                'prompt' => 'Select Barangay',

                            ]);?>
                    </div>

                    <div class="form-group">
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                    </div>

                <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>
