<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'In Transit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'date_needed',
            'date_requested',
            'reason:ntext',
            'quantity_needed',
            // 'receipient',
             'receipient',
            // 'beneficiary',
            // 'priority',
            // 'status',
            // 'total_quantity',
            // 'total_request',
            // 'user',
            // 'vehicle_plate_number',
            // 'supply_code',
            // 'volunteer_id',
            [
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a(
                        '<b>Arrived</b>',
                        Url::to(['request/arriving', 'id' => $model->id]),
                        [
                            'id'=>'grid-custom-button',
                            'data-pjax'=>true,
                            'action'=>Url::to(['request/arriving', 'id' => $model->id]),
                            'class'=>'button btn-sm btn-primary',
                        ]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
