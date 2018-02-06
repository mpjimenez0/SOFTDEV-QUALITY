<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DriverOfVehicleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Driver Of Vehicles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-of-vehicle-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Driver Of Vehicle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'vehicle_plate_number',
            'driver_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
