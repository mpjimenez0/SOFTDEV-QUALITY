<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\DriverOfVehicle */

$this->title = $model->vehicle_plate_number;
$this->params['breadcrumbs'][] = ['label' => 'Driver Of Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-of-vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'vehicle_plate_number' => $model->vehicle_plate_number, 'driver_id' => $model->driver_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'vehicle_plate_number' => $model->vehicle_plate_number, 'driver_id' => $model->driver_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'vehicle_plate_number',
            'driver_id',
        ],
    ]) ?>

</div>
