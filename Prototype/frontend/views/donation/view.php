<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Donation */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'first_name',
            'middle_name',
            'last_name',
            'email:email',
            'contact',
            'organization',
            'type_of_donation',
            'supply_code',
            'date_today',
            'receiver',
            'legal_status_of_org',
            'total_member',
            'comment',
            'barangay',
            'city_municipal',
            'province',
            'region',
        ],
    ]) ?>

</div>
