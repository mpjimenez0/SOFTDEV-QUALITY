<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SupplierHasContactNumberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Supplier Has Contact Numbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supplier-has-contact-number-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Supplier Has Contact Number', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'supplier_id',
            'contact_number_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
