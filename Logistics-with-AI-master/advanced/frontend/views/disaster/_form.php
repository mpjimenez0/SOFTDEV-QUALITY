<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Disaster */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disaster-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'disaster_type')->textInput() ?>

    <?= $form->field($model, 'month')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'day')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_barangay_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address_city_municipal_id')->textInput() ?>

    <?= $form->field($model, 'address_province_id')->textInput() ?>

    <?= $form->field($model, 'address_region_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
