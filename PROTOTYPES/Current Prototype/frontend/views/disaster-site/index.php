<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DisasterSiteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disaster Sites';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disaster-site-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Disaster Site', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'type',
            'contact',
            // 'year_established',
            // 'barangay',
            // 'city_municipal',
             'province',
            // 'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
