<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WarehouseDetailInfo */

$this->title = 'Update Warehouse Detail Info: ' . $model->warehouse_id;
$this->params['breadcrumbs'][] = ['label' => 'Warehouse Detail Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->warehouse_id, 'url' => ['view', 'warehouse_id' => $model->warehouse_id, 'contact_number' => $model->contact_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="warehouse-detail-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
