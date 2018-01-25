<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\WarehouseDetailInfo */

$this->title = $model->warehouse_id;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Detail Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="warehouse-detail-info-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'warehouse_id' => $model->warehouse_id, 'contact_number' => $model->contact_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'warehouse_id' => $model->warehouse_id, 'contact_number' => $model->contact_number], [
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
            'warehouse_id',
            'contact_number',
        ],
    ]) ?>

</div>
