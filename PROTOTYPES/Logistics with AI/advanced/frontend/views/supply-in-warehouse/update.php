<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyInWarehouse */

$this->title = 'Update Supply In Warehouse: ' . $model->supply_detail_info_supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Supply In Warehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supply_detail_info_supplier_id, 'url' => ['view', 'supply_detail_info_supplier_id' => $model->supply_detail_info_supplier_id, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'warehouse_detail_info_warehouse_id' => $model->warehouse_detail_info_warehouse_id, 'warehouse_detail_info_contact_number_id' => $model->warehouse_detail_info_contact_number_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supply-in-warehouse-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
