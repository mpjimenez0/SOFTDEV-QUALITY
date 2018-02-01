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

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'type_star') ?>

    <?= $form->field($model, 'classification') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'fuel_capacity') ?>

    <?php // echo $form->field($model, 'max_distance_fuel') ?>

    <?php // echo $form->field($model, 'capacity') ?>

    <?php // echo $form->field($model, 'owner') ?>

    <?php // echo $form->field($model, 'rent_owned') ?>

    <?php // echo $form->field($model, 'speed') ?>

    <?php // echo $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'remaining_vehicle') ?>

    <?php // echo $form->field($model, 'comment') ?>

    <?php // echo $form->field($model, 'barangay') ?>

    <?php // echo $form->field($model, 'city_municipal') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'region') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
