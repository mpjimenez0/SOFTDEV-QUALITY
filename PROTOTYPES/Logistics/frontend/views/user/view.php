<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\User */

$this->title = $model->type;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

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
            'username',
            'auth_key',
            'password_hash',
            'password_reset_token',
            'email:email',
            'status',
            'created_at',
            'updated_at',
            'first_name',
            'middle_name',
            'last_name',
            'contact',
            'smarital_status',
            'active_inactive',
            'birth_year',
            'organization',
            'type',
            'total_user',
            'barangay',
            'city_municipal',
            'province',
            'region',
            [
                'attribute' => 'image',
                'value' => Yii::getAlias('@userImgUrl').'/'.$model->image,
                'format' => ['image', ['width' => '100', 'height' => '100']]
            ],
        ],
    ]) ?>

</div>
