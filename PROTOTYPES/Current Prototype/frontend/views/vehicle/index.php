<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VehicleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
			['class' => 'yii\grid\SerialColumn'],
			

            'plate_number',
            'name',
            'type',
            'type_star',
            'classification',
            // 'width',
            // 'length',
            // 'height',
            // 'fuel_capacity',
            // 'max_distance_fuel',
            // 'capacity',
            // 'owner',
            // 'rent_owned',
            // 'speed',
            // 'quantity',
            // 'remaining_vehicle',
            // 'comment',
            // 'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
