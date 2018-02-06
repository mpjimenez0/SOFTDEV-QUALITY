<?php

use common\models\Barangay;
use common\models\CityMunicipal;
use common\models\Province;
use common\models\Region;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group col-md-12">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>
	
	<div class="col-md-4">
        <?= $form->field($model, 'updated_at')->widget(DatePicker::className(), [
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
        <?= $form->field($model, 'created_at')->widget(DatePicker::className(), [
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
        <?= $form->field($model, 'region')->dropDownList(
            ArrayHelper::map(Region::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Region',

            ]);?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'province')->dropDownList(
            ArrayHelper::map(Province::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Province',

            ]);?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'city_municipal')->dropDownList(
            ArrayHelper::map(CityMunicipal::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select City / Municipal',

            ]);?>
    </div>


    
    <?php ActiveForm::end(); ?>

</div>
