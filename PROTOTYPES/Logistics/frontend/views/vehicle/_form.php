<?php

use common\models\Barangay;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'plate_number')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'type')->dropDownList(
            [
                'Light Vehicle' => 'Light Vehicle',
                'Medium Vehicle' => 'Medium Vehicle',
                'Heavy Vehicle' => 'Heavy Vehicle',
            ], ['prompt' => '']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'type_star')->dropDownList([ 'Sea' => 'Sea', 'Air' => 'Air', 'Road' => 'Road', ], ['prompt' => '']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'classification')->dropDownList([ 'Private' => 'Private', 'Public' => 'Public', ], ['prompt' => '']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'width')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'length')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'height')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'fuel_capacity')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'max_distance_fuel')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'rent_owned')->dropDownList([ 'Rent' => 'Rent', 'Owned' => 'Owned', ], ['prompt' => '']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'speed')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'quantity')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'remaining_vehicle')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'region')->dropDownList(
            ArrayHelper::map(Barangay::find()->all(), 'region', 'region'),
            [
                'prompt' => 'Select Region',

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
        <?= $form->field($model, 'city_municipal')->dropDownList(
            ArrayHelper::map(Barangay::find()->all(), 'city_municipal', 'city_municipal'),
            [
                'prompt' => 'Select City / Municipal',

            ]);?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'barangay')->dropDownList(
            ArrayHelper::map(Barangay::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Barangay',

            ]);?>
    </div>

	<div class="col-md-6">
         <?= $form->field($model, 'comment')->textarea(['rows' => 4]) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
