<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Address */

$this->title = $model->barangay_id;
$this->params['breadcrumbs'][] = ['label' => 'Addresses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="address-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'barangay_id' => $model->barangay_id, 'city_municipal_id' => $model->city_municipal_id, 'province_id' => $model->province_id, 'region_id' => $model->region_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'barangay_id' => $model->barangay_id, 'city_municipal_id' => $model->city_municipal_id, 'province_id' => $model->province_id, 'region_id' => $model->region_id], [
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
            'barangay_id',
            'city_municipal_id',
            'province_id',
            'region_id',
            'street_address',
            'street_address_2',
        ],
    ]) ?>

</div>
