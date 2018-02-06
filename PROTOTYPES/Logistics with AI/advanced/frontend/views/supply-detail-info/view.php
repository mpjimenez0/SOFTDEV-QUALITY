<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyDetailInfo */

$this->title = $model->supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Supply Detail Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-detail-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'supplier_id' => $model->supplier_id, 'supply_code' => $model->supply_code], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'supplier_id' => $model->supplier_id, 'supply_code' => $model->supply_code], [
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
            'supplier_id',
            'supply_code',
            'address_barangay',
            'address_city_municipal',
            'address_province',
            'address_region',
            'warehouse',
            'quantity',
        ],
    ]) ?>

</div>
