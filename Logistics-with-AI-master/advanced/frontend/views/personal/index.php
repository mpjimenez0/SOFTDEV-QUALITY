<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personals';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personal-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first',
            'middle',
            'last',
            'birth_month',
            // 'birth_day',
            // 'birth_year',
            // 'sex',
            // 'nationality',
            // 'contact_number',
            // 'address_barangay_id',
            // 'address_city_municipal_id',
            // 'address_province_id',
            // 'address_region_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
