<?php

use common\models\Address;
use common\models\Supplier;
use common\models\Supply;
use common\models\Warehouse;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyDetailInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="supply-detail-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'supplier_id')->dropDownList(
        ArrayHelper::map(Supplier::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Supplier',

        ]);?>

    <?= $form->field($model, 'supply_code')->dropDownList(
        ArrayHelper::map(Supply::find()->all(), 'code', 'name'),
        [
            'prompt' => 'Select Supply',

        ]);?>

    <?= $form->field($model, 'address_barangay')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'barangay_id', 'barangay_id'),
        [
            'prompt' => 'Select Barangay',

        ]);?>

    <?= $form->field($model, 'address_city_municipal')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'city_municipal_id', 'city_municipal_id'),
        [
            'prompt' => 'Select City/Municipal',

        ]);?>

    <?= $form->field($model, 'address_province')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'province_id', 'province_id'),
        [
            'prompt' => 'Select Province',

        ]);?>

    <?= $form->field($model, 'address_region')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'region_id', 'region_id'),
        [
            'prompt' => 'Select Region',

        ]);?>

    <?= $form->field($model, 'warehouse')->dropDownList(
        ArrayHelper::map(Warehouse::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Warehouse',

        ]);?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
