<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WarehouseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehouse-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'contact_person_name') ?>

    <?= $form->field($model, 'year_established') ?>

    <?= $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'open_hours') ?>

    <?php // echo $form->field($model, 'close_hours') ?>

    <?php // echo $form->field($model, 'open_day') ?>

    <?php // echo $form->field($model, 'warehouse_type_id') ?>

    <?php // echo $form->field($model, 'warehouse_category_id') ?>

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
