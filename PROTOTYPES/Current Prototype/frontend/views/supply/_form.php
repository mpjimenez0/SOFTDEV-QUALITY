<?php

use common\models\Barangay;
use common\models\CityMunicipal;
use common\models\Province;
use common\models\Region;
use common\models\Supplier;
use common\models\Warehouse;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Supply */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
    <div class="col-md-3">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'type')->dropDownList(
            [
                'Food' => 'Food',
                'Equipment' => 'Equipment',
                'Clothing' => 'Clothing',
                'Houseware Kits' => 'Houseware Kits',
                'Hygiene Kits' => 'Hygiene Kits',
                'Health' => 'Health',
                'Shelter Kits' => 'Shelter Kits',
                'Medical Kits' => 'Medical Kits',
            ], ['prompt' => 'Select Type']) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'quantity')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'date_delivered')->widget(DatePicker::className(), [
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

    <div class="col-md-3">
        <?= $form->field($model, 'date_received')->widget(DatePicker::className(), [
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

    <div class="col-md-3">
        <?= $form->field($model, 'expiration_date')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'remaining_supply')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'total_supply')->textInput() ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-3">
        <?= $form->field($model, 'warehouse_name')->dropDownList(
            ArrayHelper::map(Warehouse::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Warehouse',

            ]);?>
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

    <div class="col-md-3">
        <?= $form->field($model, 'supplier_name')->dropDownList(
            ArrayHelper::map(Supplier::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Supplier',

            ]);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
