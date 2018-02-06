<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DonationType */

$this->title = 'Update Donation Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Donation Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donation-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
