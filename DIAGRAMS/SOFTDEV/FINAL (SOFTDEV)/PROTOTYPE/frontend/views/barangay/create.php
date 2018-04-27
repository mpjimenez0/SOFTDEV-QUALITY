<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Barangay */

$this->title = Yii::t('app', 'Create Barangay');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Barangays'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
