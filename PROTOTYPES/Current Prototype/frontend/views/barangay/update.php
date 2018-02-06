<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */

$this->title = 'Update Barangay: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'name' => $model->name, 'city_municipal' => $model->city_municipal, 'province' => $model->province, 'region' => $model->region]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangay-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
