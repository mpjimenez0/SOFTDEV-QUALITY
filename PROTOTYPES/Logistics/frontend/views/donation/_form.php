<?php

use common\models\Barangay;
use common\models\CityMunicipal;
use common\models\Province;
use common\models\Region;
use common\models\Supply;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Donation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donation-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'middle_name')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'type_of_donation')->dropDownList(
            [
                'Governmental' => 'Governmental',
                'Charitable Organization' => 'Charitable Organization',
                'NGO/Non-Profit' => 'NGO/Non-Profit',
                'International' => 'International',
            ],
        ['prompt' => 'Select type of donation']) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'supply_code')->dropDownList(
        ArrayHelper::map(Supply::find()->all(), 'code', 'name'),
        [
            'prompt' => 'Select Supply',

        ]);?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'date_today')->widget(DatePicker::className(), [
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
    <?= $form->field($model, 'receiver')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'legal_status_of_org')->textInput(['maxlength' => true]) ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'total_member')->textInput() ?>
	</div>
	
	<div class="col-md-4">
    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>
	</div>
	
    <div class="col-md-3">
        <?= $form->field($model, 'region')->dropDownList(
            ArrayHelper::map(Region::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Region',

            ]);?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'province')->dropDownList(
            ArrayHelper::map(Province::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Province',

            ]);?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'city_municipal')->dropDownList(
            ArrayHelper::map(CityMunicipal::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select City / Municipal',

            ]);?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'barangay')->dropDownList(
            ArrayHelper::map(Barangay::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Barangay',

            ]);?>
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
