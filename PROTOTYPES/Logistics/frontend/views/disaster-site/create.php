<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DisasterSite */

$this->title = 'Create Disaster Site';
$this->params['breadcrumbs'][] = ['label' => 'Disaster Sites', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-site-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
