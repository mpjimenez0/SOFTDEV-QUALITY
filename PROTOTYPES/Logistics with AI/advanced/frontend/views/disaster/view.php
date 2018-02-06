<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Disaster */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'disaster_type' => $model->disaster_type, 'address_barangay_id' => $model->address_barangay_id, 'address_city_municipal_id' => $model->address_city_municipal_id, 'address_province_id' => $model->address_province_id, 'address_region_id' => $model->address_region_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'disaster_type' => $model->disaster_type, 'address_barangay_id' => $model->address_barangay_id, 'address_city_municipal_id' => $model->address_city_municipal_id, 'address_province_id' => $model->address_province_id, 'address_region_id' => $model->address_region_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'disaster_type',
            'month',
            'day',
            'year',
            'address_barangay_id',
            'address_city_municipal_id',
            'address_province_id',
            'address_region_id',
        ],
    ]) ?>

</div>
