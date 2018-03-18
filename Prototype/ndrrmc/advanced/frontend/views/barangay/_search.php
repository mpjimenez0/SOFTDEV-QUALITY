<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BarangaySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Barangay_Name') ?>

    <?= $form->field($model, 'population') ?>

    <?= $form->field($model, 'region_id') ?>

    <?= $form->field($model, 'province_id') ?>

    <?php // echo $form->field($model, 'city_municipal_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
