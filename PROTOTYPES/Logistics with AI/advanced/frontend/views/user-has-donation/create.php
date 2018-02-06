<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserHasDonation */

$this->title = 'Create User Has Donation';
$this->params['breadcrumbs'][] = ['label' => 'User Has Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-has-donation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
