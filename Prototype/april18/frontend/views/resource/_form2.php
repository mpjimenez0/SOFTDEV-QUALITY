<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Location;
use frontend\models\Supplier;
use kartik\datetime\DateTimePicker;


/* @var $this yii\web\View */
/* @var $model frontend\models\Resource */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="resource-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supply_type')->dropDownList([ 'Supply' => 'Supply', 'Equipment' => 'Equipment', ], ['prompt' => 'Select Resource Type']) ?>

    <?= $form->field($model, 'quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_delivered')->widget(DateTimePicker::className(), [
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'yyyy-m-d h-i-s',
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'date_received')->widget(DateTimePicker::className(), [
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'yyyy-m-d h-i-s',
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expiration_date')->widget(DateTimePicker::className(), [
        'pluginOptions' => [
            'autoclose' => false,
            'todayHighlight' => true,
            'format' => 'yyyy-m-d h-i-s',
            'clearBtn' => true
        ]
    ]); ?>

    <?= $form->field($model, 'remaining_supply')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'supply_category')->dropDownList(
      [
        'Agriculture' => 'Agriculture',
        'Clothing/Textile' => 'Clothing/Textile',
        'Construction' => 'Construction',
        'Education' => 'Education',
        'Electrical/Survival' => 'Electrical/Survival',
        'Food Items' => 'Food Items',
        'Houseware' => 'Houseware',
        'Medical' => 'Medical',
        'Sleeping Gear' => 'Sleeping Gear',
        'Vehicle Supplies' => 'Vehicle Supplies',
        'WaSH' => 'WaSH',
        'Others' => 'Others',
      ],
      ['prompt' => ''])
     ?>

    <?= $form->field($model, 'supplier_id')->dropDownList(ArrayHelper::map(Supplier::find()->all(), 'id', 'name'),
                                [
                                    'prompt' => 'Select Supplier',
                                    'style' => 'width:400px',
                                ]
    ) ?>

    <?= $form->field($model, 'location_id')->dropDownList(ArrayHelper::map(Location::find()->all(), 'id', 'name'),
                                [
                                    'prompt' => 'Select Location',
                                    'style' => 'width:400px',
                                ]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
