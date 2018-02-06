<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DriverOfVehicle */

$this->title = 'Create Driver Of Vehicle';
$this->params['breadcrumbs'][] = ['label' => 'Driver Of Vehicles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="driver-of-vehicle-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
