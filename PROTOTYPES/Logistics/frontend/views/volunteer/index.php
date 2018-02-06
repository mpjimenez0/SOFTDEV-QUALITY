<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\VolunteerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Volunteers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="volunteer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Volunteer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\CheckboxColumn'],
			['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            'middle_name',
            'last_name',
            'organization',
            // 'birth_year',
            // 'type',
            // 'contact',
            // 'email:email',
            // 'date_registered',
            // 'occupation',
            // 'available_time',
            // 'available_day',
            // 'total_volunteer',
            // 'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
