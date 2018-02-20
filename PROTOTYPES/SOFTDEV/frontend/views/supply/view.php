<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Supply */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'code' => $model->code, 'warehouse_name' => $model->warehouse_name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'code' => $model->code, 'warehouse_name' => $model->warehouse_name], [
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
            'code',
            'name',
            'type',
            'quantity',
            'weight',
            'date_delivered',
            'date_received',
            'expiration_date',
            'remaining_supply',
            'total_supply',
            'comments',
            'warehouse_name',
            'barangay',
            'city_municipal',
            'province',
            'region',
            'supplier_name',
        ],
    ]) ?>

</div>
