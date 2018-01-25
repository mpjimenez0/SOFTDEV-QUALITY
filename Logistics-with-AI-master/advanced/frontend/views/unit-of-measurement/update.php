<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UnitOfMeasurement */

$this->title = 'Update Unit Of Measurement: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Unit Of Measurements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="unit-of-measurement-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
