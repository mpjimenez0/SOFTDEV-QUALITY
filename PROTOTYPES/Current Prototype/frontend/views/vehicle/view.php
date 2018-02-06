<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Vehicle */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->plate_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->plate_number], [
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
            'plate_number',
            'name',
            'type',
            'type_star',
            'classification',
            'width',
            'length',
            'height',
            'fuel_capacity',
            'max_distance_fuel',
            'capacity',
            'owner',
            'rent_owned',
            'speed',
            'quantity',
            'remaining_vehicle',
            'comment',
            'barangay',
            'city_municipal',
            'province',
            'region',
        ],
    ]) ?>

</div>
