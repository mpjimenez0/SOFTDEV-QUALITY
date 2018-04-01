<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VehicleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'plate_number') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'type_star') ?>

    <?php // echo $form->field($model, 'classification') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tracking_number') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <?php // echo $form->field($model, 'city_municipal_id') ?>

    <?php // echo $form->field($model, 'barangay_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
