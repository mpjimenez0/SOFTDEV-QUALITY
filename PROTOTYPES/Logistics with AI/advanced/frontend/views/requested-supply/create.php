<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RequestedSupply */

$this->title = 'Create Requested Supply';
$this->params['breadcrumbs'][] = ['label' => 'Requested Supplies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requested-supply-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
