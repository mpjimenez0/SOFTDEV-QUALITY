<?php

use common\models\Request;
use common\models\Supplier;
use common\models\Supply;
use common\models\Vehicle;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RequestedSupply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requested-supply-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'request_id')->dropDownList(
        ArrayHelper::map(Request::find()->all(), 'id', 'tracking_number'),
        [
            'prompt' => 'Select Request ID',

        ]);?>

    <?= $form->field($model, 'request_user_info_user_id')->dropDownList(
        ArrayHelper::map(Request::find()->all(), 'user_id', 'user_id'),
        [
            'prompt' => 'Select User',

        ]);?>

    <?= $form->field($model, 'supply_detail_info_supplier')->dropDownList(
        ArrayHelper::map(Supplier::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select User',

        ]);?>

    <?= $form->field($model, 'supply_detail_info_supply_code')->dropDownList(
        ArrayHelper::map(Supply::find()->all(), 'code', 'name'),
        [
            'prompt' => 'Select User',

        ]);?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date_expected')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'start_date_actual')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'end_date_expected')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'end_date_actual')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'vehicle_plate_number')->dropDownList(
        ArrayHelper::map(Vehicle::find()->all(), 'plate_number', 'model'),
        [
            'prompt' => 'Select Vehicle',

        ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
