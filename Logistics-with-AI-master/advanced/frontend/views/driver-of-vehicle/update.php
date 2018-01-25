<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DriverOfVehicle */

$this->title = 'Update Driver Of Vehicle: ' . $model->vehicle_plate_number;
$this->params['breadcrumbs'][] = ['label' => 'Driver Of Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->vehicle_plate_number, 'url' => ['view', 'vehicle_plate_number' => $model->vehicle_plate_number, 'driver_id' => $model->driver_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="driver-of-vehicle-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
