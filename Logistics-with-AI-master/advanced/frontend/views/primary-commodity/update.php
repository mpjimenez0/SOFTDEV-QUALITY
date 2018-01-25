<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PrimaryCommodity */

$this->title = 'Update Primary Commodity: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Primary Commodities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="primary-commodity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
