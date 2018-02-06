<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pending Requests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php
    Modal::begin([
        'header'=>'<h4>Request</h4>',
        'id' => 'modal',
        'size' => 'modal-lg',
    ]);
    echo "<div> id = 'modalContent'></div>";

    Modal::end();
    ?>

    <p>
        <?= Html::a('Create Request', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tracking_number',
            'date_requested',
            'date_needed',
            'quantity',
            'delivery_status',
            'user_id',
            // 'address_barangay_id',
            // 'address_city_municipal_id',
            // 'address_province_id',
            // 'address_region_id',

            [

                'format' => 'raw',
                'value' => function($model) {
                    return Html::a(
                        '<b>Confirm</b>',
                        Url::to(['request/confirmation', 'id' => $model->id, 'user_id' => $model->user_id]),
                        [
                            'id'=>'grid-custom-button',
                            'data-pjax'=>true,
                            'action'=>Url::to(['request/confirmation', 'id' => $model->id, 'user_id' => $model->user_id]),
                            'class'=>'button btn-sm btn-primary',
                        ]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
