<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserHasDonation */

$this->title = 'Update User Has Donation: ' . $model->user_info_user_id;
$this->params['breadcrumbs'][] = ['label' => 'User Has Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_info_user_id, 'url' => ['view', 'user_info_user_id' => $model->user_info_user_id, 'donation_id' => $model->donation_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-has-donation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
