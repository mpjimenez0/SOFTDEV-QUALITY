<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Location */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Locations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="location-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'name',
            'contact',
            'email:email',
            'type',
            'capacity',
            'status',
            [
              'label' => 'Region',
              'value' => $model->region->Region_Name,
            ],
            [
              'label' => 'City Municipal',
              'value' => $model->cityMunicipal->CityMunicipal,
            ],
            [
              'label' => 'Barangay',
              'value' => $model->barangay->Barangay_Name,
            ],
        ],
    ]) ?>

</div>
