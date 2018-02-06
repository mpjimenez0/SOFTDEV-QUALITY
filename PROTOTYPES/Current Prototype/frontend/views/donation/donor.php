<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DonationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'List of Donors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--<p>
        <?/*= Html::a('Create Donation', ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'first_name',
            'middle_name',
            'last_name',
            'email:email',
            // 'contact',
            'organization',
            // 'type_of_donation',
            // 'supply_code',
            // 'date_today',
            // 'receiver',
            // 'legal_status_of_org',
            // 'total_member',
            // 'comment',
            // 'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
