<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyInWarehouse */

$this->title = $model->supply_detail_info_supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Supply In Warehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-in-warehouse-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'supply_detail_info_supplier_id' => $model->supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $model->warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $model->warehouse_detail_info_contact_number_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'supply_detail_info_supplier_id' => $model->supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $model->warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $model->warehouse_detail_info_contact_number_id], [
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
            'supply_detail_info_supplier_id',
            'supply_detail_info_supply_code',
            'warehouse_detail_info_warehouse_id',
            'warehouse_detail_info_contact_number_id',
            'quantity',
        ],
    ]) ?>

</div>
