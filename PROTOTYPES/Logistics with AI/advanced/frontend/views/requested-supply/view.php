<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\RequestedSupply */

$this->title = $model->request_id;
$this->params['breadcrumbs'][] = ['label' => 'Requested Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requested-supply-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'request_id' => $model->request_id, 'request_user_info_user_id' => $model->request_user_info_user_id, 'supply_detail_info_supplier' => $model->supply_detail_info_supplier, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'vehicle_plate_number' => $model->vehicle_plate_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'request_id' => $model->request_id, 'request_user_info_user_id' => $model->request_user_info_user_id, 'supply_detail_info_supplier' => $model->supply_detail_info_supplier, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'vehicle_plate_number' => $model->vehicle_plate_number], [
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
            'request_id',
            'request_user_info_user_id',
            'supply_detail_info_supplier',
            'supply_detail_info_supply_code',
            'quantity',
            'start_date_expected',
            'start_date_actual',
            'end_date_expected',
            'end_date_actual',
            'vehicle_plate_number',
        ],
    ]) ?>

</div>
