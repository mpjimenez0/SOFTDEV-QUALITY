<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\RequestedSupply */

$this->title = 'Update Requested Supply: ' . $model->request_id;
$this->params['breadcrumbs'][] = ['label' => 'Requested Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->request_id, 'url' => ['view', 'request_id' => $model->request_id, 'request_user_info_user_id' => $model->request_user_info_user_id, 'supply_detail_info_supplier' => $model->supply_detail_info_supplier, 'supply_detail_info_supply_code' => $model->supply_detail_info_supply_code, 'vehicle_plate_number' => $model->vehicle_plate_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requested-supply-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
