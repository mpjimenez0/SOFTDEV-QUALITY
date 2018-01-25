<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserHasDonation */

$this->title = $model->user_info_user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Has Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-has-donation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'user_info_user_id' => $model->user_info_user_id, 'donation_id' => $model->donation_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'user_info_user_id' => $model->user_info_user_id, 'donation_id' => $model->donation_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'user_info_user_id',
            'donation_id',
            'amount',
            'quantity',
        ],
    ]) ?>

</div>
