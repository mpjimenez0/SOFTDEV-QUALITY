<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SupplyInWarehouse */

$this->title = 'Create Supply In Warehouse';
$this->params['breadcrumbs'][] = ['label' => 'Supply In Warehouses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-in-warehouse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
