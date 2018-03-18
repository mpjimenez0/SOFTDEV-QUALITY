<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CityMunicipalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'City Municipals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-municipal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create City Municipal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'CityMunicipal',
            // 'population',
            [
                'attribute' => 'region_id',
                'value' => 'region.Region_Name'
            ],
            [
                'attribute' => 'province_id',
                'value' => 'province.Province_Name'
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
