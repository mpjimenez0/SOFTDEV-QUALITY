<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(
      [ 'Light Vehicle' => 'Light Vehicle', 'Medium Vehicle' => 'Medium Vehicle', 'Heavy Vehicle' => 'Heavy Vehicle', ],
      ['prompt' => 'Select Vehicle Type']) ?>

    <?= $form->field($model, 'type_star')->dropDownList(
      [ 'Sea' => 'Sea', 'Air' => 'Air', 'Road' => 'Road', ],
      ['prompt' => 'Select Vehicle Category']) ?>

    <?= $form->field($model, 'classification')->dropDownList(
      [ 'Rent' => 'Rent', 'Owned' => 'Owned', ],
      ['prompt' => 'Select Vehicle Classification']) ?>

    <?= $form->field($model, 'status')->dropDownList(
      [ 'In Transit' => 'In Transit', 'Available' => 'Available', 'Unavailable' => 'Unavailable', ],
      ['prompt' => 'Select Vehicle Status']) ?>

    <?= $form->field($model, 'tracking_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'region_id')->textInput() ?>

    <?= $form->field($model, 'city_municipal_id')->textInput() ?>

    <?= $form->field($model, 'barangay_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
