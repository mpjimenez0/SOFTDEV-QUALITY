<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DisasterSiteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disaster-site-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'contact') ?>

    <?php // echo $form->field($model, 'year_established') ?>

    <?php // echo $form->field($model, 'barangay') ?>

    <?php // echo $form->field($model, 'city_municipal') ?>

    <?php // echo $form->field($model, 'province') ?>

    <?php // echo $form->field($model, 'region') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
