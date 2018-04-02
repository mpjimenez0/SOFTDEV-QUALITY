<?php

use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\CityMunicipal;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BarangaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Barangays');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Barangay'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Barangay_Name',
            'cityMunicipal.CityMunicipal',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
