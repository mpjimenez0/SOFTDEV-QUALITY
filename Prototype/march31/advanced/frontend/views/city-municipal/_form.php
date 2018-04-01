<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;

/* @var $this yii\web\View */
/* @var $model frontend\models\CityMunicipal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-municipal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CityMunicipal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name'),
                                [
                                    'prompt' => 'Select Region',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=city-municipal/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#signupform-city_municipal_id" ).html( data );

                                        });'
                                ]

    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
