<?php

use common\models\ContactNumber;
use common\models\Warehouse;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\WarehouseDetailInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehouse-detail-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'warehouse_id')->dropDownList(
        ArrayHelper::map(Warehouse::find()->all(), 'id', 'name'),
        [
            'prompt' => 'Select Warehouse',

        ]);?>

    <?= $form->field($model, 'contact_number')->dropDownList(
        ArrayHelper::map(ContactNumber::find()->all(), 'id', 'contact_number'),
        [
            'prompt' => 'Select Number',

        ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
