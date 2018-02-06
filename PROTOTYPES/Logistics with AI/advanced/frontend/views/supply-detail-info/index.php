<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplyDetailInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supply Detail Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-detail-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supply Detail Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'supplier_id',
            'supply_code',
            'address_barangay',
            'address_city_municipal',
            'address_province',
            // 'address_region',
            // 'warehouse',
            // 'quantity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
