 <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Warehouse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warehouse-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
	
    <div class="col-md-3">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

	<div class="col-md-3">
        <?= $form->field($model, 'year_established')->textInput(['maxlength' => true]) ?>
    </div>
	
	<div class="col-md-3">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>

    <!--<div id="map_canvas" style="width:1230px;height:400px;float:right;margin-top:10px;margin-bottom:20px;margin-right:5px">
        <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>
    </div>-->
	
	
	<div class="col-md-3">
        <?= $form->field($model, 'contact')->textInput(['maxlength' => true]) ?>
    </div>
	
	<!--<div class="col-md-3">
        <?/*= $form->field($model, 'user')->textInput() */?>
    </div>-->
	
	<div class="col-md-3">
        <?= $form->field($model, 'total_warehouse')->textInput() ?>
    </div>
	
    <div class="col-md-3">
        <?= $form->field($model, 'status')->dropDownList([ 'Rent' => 'Rent', 'Owned' => 'Owned', ], ['prompt' => '']) ?>
    </div>

	<div class="col-md-6">
        <?= $form->field($model, 'latitude')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'longitude')->textInput(['maxlength' => true]) ?>
    </div>
	
	<!--<div class="col-md-3">
        <?/*= $form->field($model, 'updated_at')->widget(DatePicker::className(), [
            'readonly' => true,
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose' => false,
                'todayHighlight' => true,
                'format' => 'mm/dd/yyyy',
                'startDate' => "mm/dd/yyyy",
                'clearBtn' => true
            ]
        ]); */?>
    </div>

    <div class="col-md-3">
        <?/*= $form->field($model, 'created_at')->widget(DatePicker::className(), [
            'readonly' => true,
            'removeButton' => false,
            'pluginOptions' => [
                'autoclose' => false,
                'todayHighlight' => true,
                'format' => 'mm/dd/yyyy',
                'startDate' => "mm/dd/yyyy",
                'clearBtn' => true
            ]
        ]); */?>
    </div>-->

    <div class="col-md-3">
        <?= $form->field($model, 'private_public')->dropDownList([ 'Private' => 'Private', 'Public' => 'Public', ], ['prompt' => '']) ?>
    </div>

    

    <div class="col-md-3">
        <?= $form->field($model, 'capacity')->textInput() ?>
    </div>

    <!--<div class="col-md-4">
        <?/*= $form->field($model, 'comments')->textarea(['rows' => 4]) */?>
    </div>	-->
    
    <?php ActiveForm::end(); ?>

</div>
