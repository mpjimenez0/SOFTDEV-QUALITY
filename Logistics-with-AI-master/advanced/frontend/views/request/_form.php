<?php

use common\models\Address;
use common\models\DeliveryStatus;
use common\models\User;
use kartik\date\DatePicker;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model common\models\Request */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="request-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_requested')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'date_needed')->widget(DatePicker::className(), [
        'readonly' => true,
        'removeButton' => false,
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'mm/dd/yyyy',
            'startDate' => "mm/dd/yyyy",
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(User::find()->all(), 'id', 'username'),
        [
            'prompt' => 'Select User',

        ]);?>

    <?= $form->field($model, 'address_barangay_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'barangay_id', 'barangay_id'),
        [
            'prompt' => 'Select Barangay',

        ]);?>

    <?= $form->field($model, 'address_city_municipal_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'city_municipal_id', 'city_municipal_id'),
        [
            'prompt' => 'Select City/Municipal',

        ]);?>

    <?= $form->field($model, 'address_province_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'province_id', 'province_id'),
        [
            'prompt' => 'Select Province',

        ]);?>

    <?= $form->field($model, 'address_region_id')->dropDownList(
        ArrayHelper::map(Address::find()->all(), 'region_id', 'region_id'),
        [
            'prompt' => 'Select Region',

        ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
