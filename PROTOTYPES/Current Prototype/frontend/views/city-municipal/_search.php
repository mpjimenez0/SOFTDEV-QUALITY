<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CityMunicipalSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="city-municipal-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

	<div class="col-md-11">
    <?= $form->field($model, 'globalSearch') ?>
	</div>
	
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
