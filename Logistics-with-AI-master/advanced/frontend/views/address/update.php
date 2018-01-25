<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Address */

$this->title = 'Update Address: ' . $model->barangay_id;
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->barangay_id, 'url' => ['view', 'barangay_id' => $model->barangay_id, 'city_municipal_id' => $model->city_municipal_id, 'province_id' => $model->province_id, 'region_id' => $model->region_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="address-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
