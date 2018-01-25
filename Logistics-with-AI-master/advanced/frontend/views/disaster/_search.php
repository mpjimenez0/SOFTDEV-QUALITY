<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DisasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disaster-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'disaster_type') ?>

    <?= $form->field($model, 'month') ?>

    <?= $form->field($model, 'day') ?>

    <?= $form->field($model, 'year') ?>

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
