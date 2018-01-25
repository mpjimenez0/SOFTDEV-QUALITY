<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyInWarehouse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-in-warehouse-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supply_detail_info_supplier_id')->textInput() ?>

    <?= $form->field($model, 'supply_detail_info_supply_code')->textInput() ?>

    <?= $form->field($model, 'warehouse_detail_info_warehouse_id')->textInput() ?>

    <?= $form->field($model, 'warehouse_detail_info_contact_number_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
