<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ContactNumber */

$this->title = 'Update Contact Number: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Contact Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-number-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
