<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SupplyDetailInfo */

$this->title = 'Create Supply Detail Info';
$this->params['breadcrumbs'][] = ['label' => 'Supply Detail Infos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="supply-detail-info-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
