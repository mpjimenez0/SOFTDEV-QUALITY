<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\CityMunicipal;
use frontend\models\Barangay;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehicle */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehicle-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plate_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([ 'Light Vehicle' => 'Light Vehicle', 'Medium Vehicle' => 'Medium Vehicle', 'Heavy Vehicle' => 'Heavy Vehicle', ], ['prompt' => 'Select Vehicle Type']) ?>

    <?= $form->field($model, 'type_star')->dropDownList([ 'Sea' => 'Sea', 'Air' => 'Air', 'Road' => 'Road', ], ['prompt' => 'Select Vehicle Category']) ?>

    <?= $form->field($model, 'classification')->dropDownList([ 'Rent' => 'Rent', 'Owned' => 'Owned', ], ['prompt' => 'Select Vehicle Classification']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'In Transit' => 'In Transit', 'Available' => 'Available', 'Unavailable' => 'Unavailable', ], ['prompt' => 'Select Vehicle Status']) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name'),
                                [
                                    'prompt' => 'Select Region',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=city-municipal/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#vehicle-city_municipal_id" ).html( data );

                                        });'
                                ]
    ) ?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal'),
                                [
                                    'prompt' => 'Select City/Municipal',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=barangay/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#vehicle-barangay_id" ).html( data );

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
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
