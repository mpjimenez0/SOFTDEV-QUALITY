<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'contact') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'contact_person') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'barangay_id') ?>

    <?php // echo $form->field($model, 'city_municipal_id') ?>

    <?php // echo $form->field($model, 'province_id') ?>

    <?php // echo $form->field($model, 'region_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
