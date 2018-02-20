<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CityMunicipal */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'City Municipals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-municipal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'name' => $model->name, 'province' => $model->province, 'region' => $model->region], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'name' => $model->name, 'province' => $model->province, 'region' => $model->region], [
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
            'name',
            'province',
            'region',
        ],
    ]) ?>

</div>
