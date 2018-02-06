<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestedSupplySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requested-supply-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'request_id') ?>

    <?= $form->field($model, 'request_user_info_user_id') ?>

    <?= $form->field($model, 'supply_detail_info_supplier') ?>

    <?= $form->field($model, 'supply_detail_info_supply_code') ?>

    <?= $form->field($model, 'quantity') ?>

    <?php // echo $form->field($model, 'start_date_expected') ?>

    <?php // echo $form->field($model, 'start_date_actual') ?>

    <?php // echo $form->field($model, 'end_date_expected') ?>

    <?php // echo $form->field($model, 'end_date_actual') ?>

    <?php // echo $form->field($model, 'vehicle_plate_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
