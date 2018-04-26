<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\RequestSearch */
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

    <?php // echo $form->field($model, 'priority') ?>

    <?php // echo $form->field($model, 'receipient') ?>

    <?php // echo $form->field($model, 'beneficiary') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'resource_id') ?>

    <?php // echo $form->field($model, 'vehicle_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
