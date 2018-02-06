<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DisasterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disasters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Disaster', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'disaster_type',
            'month',
            'day',
            'year',
            // 'address_barangay_id',
            // 'address_city_municipal_id',
            // 'address_province_id',
            // 'address_region_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
