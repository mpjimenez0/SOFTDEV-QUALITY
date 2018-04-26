<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Vehicle */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Vehicles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehicle-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'plate_number',
            'type',
            'type_star',
            'classification',
            'status',
            [
                'attribute' => 'region_id',
                'value' => $model->region->Region_Name,
            ],
            [
                'attribute' => 'city_municipal_id',
                'value' => $model->cityMunicipal->CityMunicipal
            ],
            [
                'attribute' => 'barangay_id',
                'value' => $model->barangay->Barangay_Name
            ],

        ],
    ]) ?>

</div>
