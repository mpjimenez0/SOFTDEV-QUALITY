<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Disaster */

$this->title = 'Create Disaster';
$this->params['breadcrumbs'][] = ['label' => 'Disasters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
