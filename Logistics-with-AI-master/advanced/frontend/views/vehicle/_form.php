<?php

use common\models\Address;
use common\models\VehicleCategory;
use common\models\VehicleSize;
use common\models\VehicleType;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'timestamp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_category')->dropDownList(
        ArrayHelper::map(VehicleCategory::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Category',

        ]);?>

    <?= $form->field($model, 'vehicle_type')->dropDownList(
        ArrayHelper::map(VehicleType::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Type',

        ]);?>

    <?= $form->field($model, 'available_day')->dropDownList([ 'Monday' => 'Monday', 'Tuesday' => 'Tuesday', 'Wednesday' => 'Wednesday', 'Thursday' => 'Thursday', 'Friday' => 'Friday', 'Saturday' => 'Saturday', 'Sunday' => 'Sunday', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'available_hour_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'available_hour_end')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vehicle_size_id')->dropDownList(
        ArrayHelper::map(VehicleSize::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Size',

        ]);?>

    <?= $form->field($model, 'address_barangay_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'barangay_id', 'barangay_id'),
        [
            'prompt' => 'Select Address',

        ]);?>

    <?= $form->field($model, 'address_city_municipal_id')->textInput() ?>
    <?= $form->field($model, 'address_city_municipal_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'city_municipal_id', 'city_municipal_id'),
        [
            'prompt' => 'Select City/Municipal',

        ]);?>

    <?= $form->field($model, 'address_province_id')->textInput() ?>

    <?= $form->field($model, 'address_region_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
