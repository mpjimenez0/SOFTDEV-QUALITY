<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UnitOfMeasurement */

$this->title = 'Create Unit Of Measurement';
$this->params['breadcrumbs'][] = ['label' => 'Unit Of Measurements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unit-of-measurement-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
