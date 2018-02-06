<?php

use common\models\Supply;
use common\models\User;
use common\models\Vehicle;
use common\models\Volunteer;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Request */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
    <div class="col-md-4">
        <?= $form->field($model, 'date_needed')->widget(DatePicker::className(), [
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
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'date_requested')->widget(DatePicker::className(), [
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
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'quantity_needed')->textInput() ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'receipient')->dropDownList(
            [
                'National' => 'National',
                'Regional' => 'Regional',
                'Mayor' => 'Mayor',
                'External User' => 'External User',
            ],
            ['prompt' => '']) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'beneficiary')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'priority')->dropDownList(
            [
                'High' => 'High',
                'Medium' => 'Medium',
                'Low' => 'Low',
            ],
            ['prompt' => '']) ?>
    </div>


    <!--<div class="col-md-3">
        <?/*= $form->field($model, 'status')->textInput(['readonly' => true]) */?>
    </div>-->

   <!-- <div class="col-md-3">
        <?/*= $form->field($model, 'total_quantity')->textInput() */?>
    </div>

    <div class="col-md-3">
        <?/*= $form->field($model, 'total_request')->textInput() */?>
    </div>-->


   <!-- <div class="col-md-4">
        <?/*= $form->field($model, 'vehicle_type')->dropDownList(
            [
                'Light Vehicle' => 'Light Vehicle',
                'Medium Vehicle' => 'Medium Vehicle',
                'Heavy Vehicle' => 'Heavy Vehicle',
            ], ['prompt' => 'What type of vehicle do you need?']) */?>
    </div>-->

    <!--<div class="col-md-4">
        <?/*= $form->field($model, 'vehicle_type')->textInput(['maxlength' => true]) */?>
    </div>

    <div class="col-md-4">
        <?/*= $form->field($model, 'vehicle_plate_number')->dropDownList(
            ArrayHelper::map(Vehicle::find()->all(), 'plate_number', 'name'),
            [
                'prompt' => 'Select Vehicle',

            ]);*/?>
    </div>-->

    <div class="col-md-4">
        <?= $form->field($model, 'user')->dropDownList(
            ArrayHelper::map(User::find()->all(), 'id', 'username'),
            [
                'prompt' => 'Select User',

            ]);?>
    </div>

    <!--<div class="col-md-6">
        <?/*= $form->field($model, 'supply_type')->dropDownList(
            [
                'Food' => 'Food',
                'Equipment' => 'Equipment',
                'Clothing' => 'Clothing',
                'Houseware Kits' => 'Houseware Kits',
                'Hygiene Kits' => 'Hygiene Kits',
                'Medical Kits' => 'Medical Kits',
                'Health' => 'Health',
                'Shelter Kits' => 'Shelter Kits',
            ], ['prompt' => 'What kind of supply do you need?']) */?>
    </div>-->

   <!-- <div class="col-md-4">
        <?/*= $form->field($model, 'supply_type')->textInput(['maxlength' => true]) */?>
    </div>

    <div class="col-md-6">
        <?/*= $form->field($model, 'supply_code')->dropDownList(
            ArrayHelper::map(Supply::find()->all(), 'code', 'name'),
            [
                'prompt' => 'Select Supply',

            ]);*/?>
    </div>-->

    <!--<div class="col-md-6">
        <?/*= $form->field($model, 'volunteer_type')->dropDownList(
            [
                'Nurse' => 'Nurse',
                'Doctor' => 'Doctor',
                'Dentist' => 'Dentist',
                'Engineer' => 'Engineer',
                'Teacher' => 'Teacher',
                'IT' => 'IT',
                'Psychologist' => 'Psychologist',
                'Architect' => 'Architect',
                'Police' => 'Police',
                'Military Officer' => 'Military Officer',
            ], ['prompt' => 'What kind of volunteer do you need?']) */?>
    </div>-->

    <!--<div class="col-md-6">
        <?/*= $form->field($model, 'volunteer_type')->textInput(['maxlength' => true]) */?>
    </div>

    <div class="col-md-6">
        <?/*= $form->field($model, 'volunteer')->dropDownList(
            ArrayHelper::map(Volunteer::find()->all(), 'id', 'first_name'),
            [
                'prompt' => 'Select Volunteer',

            ]);*/?>
    </div>-->

	<div class="col-md-12">
        <?= $form->field($model, 'reason')->textarea(['rows' => 4]) ?>
    </div>
  

    <?php ActiveForm::end(); ?>

</div>
