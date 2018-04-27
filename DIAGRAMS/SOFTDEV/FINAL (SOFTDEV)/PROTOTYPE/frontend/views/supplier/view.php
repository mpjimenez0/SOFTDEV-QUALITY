<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\ArrayHelper;
use frontend\models\Region;
use frontend\models\Province;
use frontend\models\CityMunicipal;
use frontend\models\Barangay;
/* @var $this yii\web\View */
/* @var $model frontend\models\Supplier */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('De-activate', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'contact',
            'email:email',
            'contact_person',
            'website',
            'region.Region_Name',
            'cityMunicipal.CityMunicipal',
            'barangay.Barangay_Name',
        ],
    ]) ?>

</div>
