<?php

use common\models\Barangay;
use common\models\Province;
use common\models\Region;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CityMunicipal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-municipal-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group col-md-12">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
    <div class="col-md-4">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>


    <div class="col-md-4">
        <?= $form->field($model, 'province')->dropDownList(
            ArrayHelper::map(Province::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Province',

            ]);?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'region')->dropDownList(
            ArrayHelper::map(Region::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Region',

            ]);?>
    </div>

    

    <?php ActiveForm::end(); ?>

</div>
