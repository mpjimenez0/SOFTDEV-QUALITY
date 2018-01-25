<?php

use common\models\Barangay;
use common\models\CityMunicipal;
use common\models\Province;
use common\models\Region;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Address */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="address-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barangay_id')->dropDownList(
        ArrayHelper::map(Barangay::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Barangay',

        ]);?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(
        ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select City or Municipal',

        ]);?>

    <?= $form->field($model, 'province_id')->dropDownList(
        ArrayHelper::map(Province::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Province',

        ]);?>

    <?= $form->field($model, 'region_id')->dropDownList(
        ArrayHelper::map(Region::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Region',

        ]);?>

    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street_address_2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
