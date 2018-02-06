<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DriverOfVehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="driver-of-vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'vehicle_plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
