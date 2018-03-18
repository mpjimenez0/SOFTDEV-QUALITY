<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\Province;
use frontend\models\CityMunicipal;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Barangay_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name')) ?>

    <?= $form->field($model, 'province_id')->dropDownList(ArrayHelper::map(Province::find()->all(), 'id', 'Province_Name')) ?>

    <?= $form->field($model, 'city_municipal_id')->dropDownList(ArrayHelper::map(CityMunicipal::find()->all(), 'id', 'CityMunicipal')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
