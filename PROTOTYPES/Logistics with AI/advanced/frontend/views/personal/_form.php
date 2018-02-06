<?php

use common\models\Address;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Personal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'birth_month')->dropDownList([ 'January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'June' => 'June', 'July' => 'July', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'birth_day')->textInput() ?>

    <?= $form->field($model, 'birth_year')->textInput() ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nationality')->textInput() ?>
    <?= $form->field($model, 'nationality')->dropDownList([ 'Filipino' => 'Filipino', 'American' => 'American' ], ['prompt' => '']) ?>

    <?= $form->field($model, 'contact_number')->textInput() ?>

    <?= $form->field($model, 'address_barangay_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Barangay',

        ]);?>

    <?= $form->field($model, 'address_city_municipal_id')->textInput() ?>

    <?= $form->field($model, 'address_province_id')->textInput() ?>

    <?= $form->field($model, 'address_region_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
