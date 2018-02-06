<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Disaster */

$this->title = 'Update Disaster: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'disaster_type' => $model->disaster_type, 'address_barangay_id' => $model->address_barangay_id, 'address_city_municipal_id' => $model->address_city_municipal_id, 'address_province_id' => $model->address_province_id, 'address_region_id' => $model->address_region_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disaster-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
