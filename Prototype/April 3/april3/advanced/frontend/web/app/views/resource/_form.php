<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Resource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resource-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supply_type')->dropDownList([ 'Supply' => 'Supply', 'Equipment' => 'Equipment', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_delivered')->textInput() ?>

    <?= $form->field($model, 'date_received')->textInput() ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supplier_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expiration_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'remaining_supply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supply_category')->dropDownList([ 'Agriculture' => 'Agriculture', 'Clothing/Textile' => 'Clothing/Textile', 'Construction' => 'Construction', 'Education' => 'Education', 'Electrical/Survival' => 'Electrical/Survival', 'Food Items' => 'Food Items', 'Houseware' => 'Houseware', 'Medical' => 'Medical', 'Sleeping Gear' => 'Sleeping Gear', 'Vehicle Supplies' => 'Vehicle Supplies', 'WaSH' => 'WaSH', 'Others' => 'Others', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'supplier_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
