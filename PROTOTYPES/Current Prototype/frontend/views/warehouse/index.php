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

            'name',
            //'status',
            //'contact',
            //'email:email',
             'area',
            //'year_established',
              'capacity',
            // 'room',
             'private_public',
            // 'comments',
            // 'total_warehouse',
            // 'created_at',
            // 'updated_at',
            // 'user',
            // 'latitude',
            // 'longitude',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
