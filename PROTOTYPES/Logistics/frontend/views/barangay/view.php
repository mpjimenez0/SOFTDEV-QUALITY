<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'name' => $model->name, 'city_municipal' => $model->city_municipal, 'province' => $model->province, 'region' => $model->region], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'name' => $model->name, 'city_municipal' => $model->city_municipal, 'province' => $model->province, 'region' => $model->region], [
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
            'city_municipal',
            'province',
            'region',
            'updated_at',
            'created_at',
        ],
    ]) ?>

</div>
