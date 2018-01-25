<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\WarehouseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Warehouses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Warehouse', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'contact_person_name',
            'year_established',
            'description:ntext',
            // 'area',
            // 'timestamp',
            // 'open_hours',
            // 'close_hours',
            // 'open_day',
            // 'warehouse_type_id',
            // 'warehouse_category_id',
            // 'address_barangay_id',
            // 'address_city_municipal_id',
            // 'address_province_id',
            // 'address_region_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
