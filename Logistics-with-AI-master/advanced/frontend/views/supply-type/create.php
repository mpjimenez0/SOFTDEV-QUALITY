<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SupplyType */

$this->title = 'Create Supply Type';
$this->params['breadcrumbs'][] = ['label' => 'Supply Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
