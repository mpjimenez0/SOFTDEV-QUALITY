<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\CityMunicipal;
use frontend\models\Barangay;

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="location-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Hangar' => 'Hangar', 'Port' => 'Port', 'MotorPool' => 'MotorPool', 'Warehouse' => 'Warehouse', ], ['prompt' => 'Select Location Type']) ?>

    <?= $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['readonly' => true, 'value' => 'Active']) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name'),
                                [
                                    'prompt' => 'Select Region',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=city-municipal/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#locationform-city_municipal_id" ).html( data );

                                        });'
                                ]
    ) ?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal'),
                                [
                                    'prompt' => 'Select City/Municipal',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=barangay/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#locationform-barangay_id" ).html( data );

                                        });'
                                ]
    ) ?>

     <?= $form->field($model, 'barangay_id')->dropDownList(ArrayHelper::map(Barangay::find()->all(), 'id', 'Barangay_Name'),
                                [
                                    'prompt' => 'Select Barangay',
                                    'style' => 'width:250px',
                                ]
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
