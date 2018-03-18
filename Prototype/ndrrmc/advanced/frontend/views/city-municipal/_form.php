<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\Province;

/* @var $this yii\web\View */
/* @var $model frontend\models\CityMunicipal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-municipal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CityMunicipal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region_id')->dropDownList(ArrayHelper::map(Region::find()->all(), 'id', 'Region_Name')) ?>

    <?= $form->field($model, 'province_id')->dropDownList(ArrayHelper::map(Province::find()->all(), 'id', 'Province_Name')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
