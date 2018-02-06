<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Incoming Supplies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
			['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'name',
            'type',
            'quantity',
            //'weight',
            // 'date_delivered',
            // 'date_received',
            // 'expiration_date',
            // 'remaining_supply',
            // 'total_supply',
            // 'comments',
             'warehouse_name',
            // 'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',
            // 'supplier_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
