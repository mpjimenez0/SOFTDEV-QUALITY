<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PrimaryCommodity */

$this->title = 'Create Primary Commodity';
$this->params['breadcrumbs'][] = ['label' => 'Primary Commodities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="primary-commodity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
