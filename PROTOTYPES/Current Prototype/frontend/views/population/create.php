<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Population */

$this->title = 'Create Population';
$this->params['breadcrumbs'][] = ['label' => 'Populations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="population-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
