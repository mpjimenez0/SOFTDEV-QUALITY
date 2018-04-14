<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResourceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resource-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'supply_type') ?>

    <?= $form->field($model, 'quantity') ?>

    <?= $form->field($model, 'date_delivered') ?>

    <?php // echo $form->field($model, 'date_received') ?>

    <?php // echo $form->field($model, 'details') ?>

    <?php // echo $form->field($model, 'supplier_name') ?>

    <?php // echo $form->field($model, 'expiration_date') ?>

    <?php // echo $form->field($model, 'remaining_supply') ?>

    <?php // echo $form->field($model, 'supply_category') ?>

    <?php // echo $form->field($model, 'supplier_id') ?>

    <?php // echo $form->field($model, 'location_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
