<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SupplyDetailInfo */

$this->title = 'Update Supply Detail Info: ' . $model->supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Supply Detail Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supplier_id, 'url' => ['view', 'supplier_id' => $model->supplier_id, 'supply_code' => $model->supply_code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supply-detail-info-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
