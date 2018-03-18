<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barangay */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-view">

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
            'Barangay_Name',
            // 'population',
            [
                'attribute' => 'region_id',
                'value' => $model->region->Region_Name
            ],
            [
                'attribute' => 'province_id',
                'value' => $model->province->Province_Name
            ],
            [
                'attribute' => 'city_municipal_id',
                'value' => $model->cityMunicipal->CityMunicipal
            ]
        ],
    ]) ?>

</div>
