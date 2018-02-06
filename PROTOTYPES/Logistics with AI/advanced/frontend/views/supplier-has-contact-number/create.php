<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SupplierHasContactNumber */

$this->title = 'Create Supplier Has Contact Number';
$this->params['breadcrumbs'][] = ['label' => 'Supplier Has Contact Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-has-contact-number-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
