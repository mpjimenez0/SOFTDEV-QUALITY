<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\UserHasDonation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-has-donation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_info_user_id')->textInput() ?>

    <?= $form->field($model, 'donation_id')->textInput() ?>

    <?= $form->field($model, 'amount')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
