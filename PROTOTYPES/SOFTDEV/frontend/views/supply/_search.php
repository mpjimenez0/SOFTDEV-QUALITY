<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupplySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'date_delivered') ?>

    <?php // echo $form->field($model, 'date_received') ?>

    <?php // echo $form->field($model, 'expiration_date') ?>

    <?php // echo $form->field($model, 'remaining_supply') ?>

    <?php // echo $form->field($model, 'total_supply') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'warehouse_name') ?>

    <?php // echo $form->field($model, 'barangay') ?>

    <?php // echo $form->field($model, 'city_municipal') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'supplier_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
