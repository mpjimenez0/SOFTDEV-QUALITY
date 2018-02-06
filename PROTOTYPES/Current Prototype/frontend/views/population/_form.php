<?php

use common\models\Barangay;
use common\models\CityMunicipal;
use common\models\Province;
use common\models\Region;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Population */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="population-form">

    <?php $form = ActiveForm::begin(); ?>

	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
	<div class="col-md-1">
    <?= $form->field($model, 'quantity')->textInput() ?>
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

    <div class="col-md-2">
        <?= $form->field($model, 'barangay')->dropDownList(
            ArrayHelper::map(Barangay::find()->all(), 'name', 'name'),
            [
                'prompt' => 'Select Barangay',

            ]);?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
