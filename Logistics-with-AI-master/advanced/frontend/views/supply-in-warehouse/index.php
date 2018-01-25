<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplyInWarehouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supply In Warehouses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-in-warehouse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supply In Warehouse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'supply_detail_info_supplier_id',
            'supply_detail_info_supply_code',
            'warehouse_detail_info_warehouse_id',
            'warehouse_detail_info_contact_number_id',
            'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
