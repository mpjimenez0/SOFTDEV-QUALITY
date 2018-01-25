<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\VehicleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'plate_number') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'is_lease') ?>

    <?= $form->field($model, 'timestamp') ?>

    <?= $form->field($model, 'vehicle_category') ?>

    <?php // echo $form->field($model, 'vehicle_type') ?>

    <?php // echo $form->field($model, 'available_day') ?>

    <?php // echo $form->field($model, 'available_hour_start') ?>

    <?php // echo $form->field($model, 'available_hour_end') ?>

    <?php // echo $form->field($model, 'vehicle_size_id') ?>

    <?php // echo $form->field($model, 'address_barangay_id') ?>

    <?php // echo $form->field($model, 'address_city_municipal_id') ?>

    <?php // echo $form->field($model, 'address_province_id') ?>

    <?php // echo $form->field($model, 'address_region_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
