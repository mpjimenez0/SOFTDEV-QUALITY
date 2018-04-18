<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\CityMunicipal;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Barangay_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal'),
                                [
                                    'prompt' => 'Select City/Municipal',
                                    'style' => 'width:250px',
                                    'onChange' => '
                                        $.post("index.php?r=barangay/lists&id='.'"+$(this).val(), function( data) {
                                            $( "select#signupform-barangay_id" ).html( data );

                                        });'

                                ]

    ) ?>
    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
