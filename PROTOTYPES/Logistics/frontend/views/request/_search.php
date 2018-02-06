<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'date_needed') ?>

    <?= $form->field($model, 'date_requested') ?>

    <?= $form->field($model, 'reason') ?>

    <?= $form->field($model, 'quantity_needed') ?>

    <?php // echo $form->field($model, 'receipient') ?>

    <?php // echo $form->field($model, 'requestor') ?>

    <?php // echo $form->field($model, 'beneficiary') ?>

    <?php // echo $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'total_quantity') ?>

    <?php // echo $form->field($model, 'total_request') ?>

    <?php // echo $form->field($model, 'user') ?>

    <?php // echo $form->field($model, 'vehicle_plate_number') ?>

    <?php // echo $form->field($model, 'supply_code') ?>

    <?php // echo $form->field($model, 'volunteer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
