<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SupplierHasContactNumber */

$this->title = 'Update Supplier Has Contact Number: ' . $model->supplier_id;
$this->params['breadcrumbs'][] = ['label' => 'Supplier Has Contact Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->supplier_id, 'url' => ['view', 'supplier_id' => $model->supplier_id, 'contact_number_id' => $model->contact_number_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="supplier-has-contact-number-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
