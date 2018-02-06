<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DisasterType */

$this->title = 'Create Disaster Type';
$this->params['breadcrumbs'][] = ['label' => 'Disaster Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
