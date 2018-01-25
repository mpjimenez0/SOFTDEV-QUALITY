<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyInWarehouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-in-warehouse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'supply_detail_info_supplier_id') ?>

    <?= $form->field($model, 'supply_detail_info_supply_code') ?>

    <?= $form->field($model, 'warehouse_detail_info_warehouse_id') ?>

    <?= $form->field($model, 'warehouse_detail_info_contact_number_id') ?>

    <?= $form->field($model, 'quantity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
