<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supplies - Food';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supply', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
        Modal::begin([
            'header'=>'<h4>Request</h4>',
            'id' => 'modal',
            'size' => 'modal-lg',
        ]);
        echo "<div> id = 'modalContent'></div>";

        Modal::end();
    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
			['class' => 'yii\grid\CheckboxColumn'],
            ['class' => 'yii\grid\SerialColumn'],

            'code',
            'name',
            'type',
            'quantity',
            //'weight',
            // 'date_delivered',
            // 'date_received',
            // 'expiration_date',
            // 'remaining_supply',
            // 'total_supply',
            // 'comments',
             'warehouse_name',
            // 'barangay',
            // 'city_municipal',
            // 'province',
            // 'region',
            // 'supplier_name',
            [
                'format' => 'raw',
                'value' => function($model) {
                    return Html::a(
                        '<b>Request</b>',
                        Url::to(['request/create', 'id' => $model->code]),
                        [
                            'id'=>'grid-custom-button',
                            'data-pjax'=>true,
                            'action'=>Url::to(['index.php?r=request/create', 'id' => 'modalButton']),
                            'class'=>'button btn-sm btn-primary',
                        ]
                    );
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
