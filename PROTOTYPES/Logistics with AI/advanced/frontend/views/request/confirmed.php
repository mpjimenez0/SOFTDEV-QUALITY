<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'date_requested',
            'date_needed',
            'quantity',
            'description:ntext',
            'tracking_number',
            'delivery_status',
            // 'user_id',
            // 'address_barangay_id',
            // 'address_city_municipal_id',
            // 'address_province_id',
            // 'address_region_id',


            [

                'format' => 'raw',
                'value' => function($model) {
                    return Html::a(
                        '<b>Send</b>',
                        Url::to(['request/intransiting', 'id' => $model->id, 'user_id' => $model->user_id]),
                        [
                            'id'=>'grid-custom-button',
                            'data-pjax'=>true,
                            'action'=>Url::to(['request/intransiting', 'id' => $model->id, 'user_id' => $model->user_id]),
                            'class'=>'button btn-sm btn-primary',
                        ]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
