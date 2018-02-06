<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequestedSupplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requested Supplies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requested-supply-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Requested Supply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'request_id',
            'request_user_info_user_id',
            'supply_detail_info_supplier',
            'supply_detail_info_supply_code',
            'quantity',
            // 'start_date_expected',
            // 'start_date_actual',
            // 'end_date_expected',
            // 'end_date_actual',
            // 'vehicle_plate_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
