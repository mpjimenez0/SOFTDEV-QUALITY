<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_needed')->textInput() ?>

    <?= $form->field($model, 'date_requested')->textInput() ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'receipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beneficiary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->dropDownList([ 'High' => 'High', 'Medium' => 'Medium', 'Low' => 'Low', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Transit' => 'Transit', 'Pending' => 'Pending', 'Delivered' => 'Delivered', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'total_quantity')->textInput() ?>

    <?= $form->field($model, 'total_requests')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'vehicle_plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supply_code')->textInput() ?>

    <?= $form->field($model, 'volunteer_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
