<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\CityMunicipal;
use frontend\models\Barangay;

/* @var $this yii\web\View */
/* @var $model frontend\models\Supplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_person')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name'),
                                [
                                    'prompt' => 'Select Region',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=city-municipal/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#supplier-city_municipal_id" ).html( data );

                                        });'
                                ]
    ) ?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal'),
                                [
                                    'prompt' => 'Select City/Municipal',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=barangay/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#supplier-barangay_id" ).html( data );

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
