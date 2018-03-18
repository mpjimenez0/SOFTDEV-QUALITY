<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use frontend\models\CityMunicipal;
use frontend\models\Region;
use frontend\models\Province;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BarangaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangay/District';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barangay', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Barangay_Name',
            //'population',
            [
                'attribute' => 'region_id',
                'value' => 'region.Region_Name',
                'filter' => ArrayHelper::map(Region::find()->asArray()->all(), 'id', 'Region_Name'),
            ],
            [
                'attribute' => 'province_id',
                'value' => 'province.Province_Name',
                'filter' => ArrayHelper::map(Province::find()->asArray()->all(), 'id', 'Province_Name'),
            ],
            [
                'attribute' =>'city_municipal_id',
                'value' => 'cityMunicipal.CityMunicipal',
                'filter' => ArrayHelper::map(CityMunicipal::find()->asArray()->all(), 'id', 'CityMunicipal'),
            ],

            //'region_id',
            //'province_id',
            // 'city_municipal_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
