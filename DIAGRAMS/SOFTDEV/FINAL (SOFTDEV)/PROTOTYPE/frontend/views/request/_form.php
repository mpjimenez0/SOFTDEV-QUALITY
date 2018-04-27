<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Request */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_needed')->widget(DateTimePicker::className(), [
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'yyyy-m-d h-i-s',
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'date_requested')->textInput(['readonly' => true, 'style' => 'width:200px']) ?>

    <?= $form->field($model, 'reason')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'quantity_needed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipient')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'beneficiary')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'In Transit' => 'In Transit', 'Pending' => 'Pending', 'Delivered' => 'Delivered', 'Confirmed' => 'Confirmed', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'user_id')->textInput(
      [
        'value' => Yii::$app->user->getId(),
        'readonly' => true
      ]
      )?>

    <?= $form->field($model, 'resource_id')->textInput() ?>

    <?= $form->field($model, 'vehicle_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
