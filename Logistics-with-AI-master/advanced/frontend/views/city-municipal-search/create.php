<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CityMunicipal */

$this->title = 'Create City Municipal';
$this->params['breadcrumbs'][] = ['label' => 'City Municipals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="city-municipal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
