<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Barangay */

$this->title = 'Update Barangay: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangay-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
