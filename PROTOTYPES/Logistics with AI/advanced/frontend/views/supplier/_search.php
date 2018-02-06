<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupplierSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'website') ?>

    <?= $form->field($model, 'contact_person') ?>

    <?php // echo $form->field($model, 'timestamp') ?>

    <?php // echo $form->field($model, 'principal_name') ?>

    <?php // echo $form->field($model, 'principal_title') ?>

    <?php // echo $form->field($model, 'business_number_of_year') ?>

    <?php // echo $form->field($model, 'description') ?>

    <?php // echo $form->field($model, 'supplier_type') ?>

    <?php // echo $form->field($model, 'legal_structure_id') ?>

    <?php // echo $form->field($model, 'primary_commodity_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
