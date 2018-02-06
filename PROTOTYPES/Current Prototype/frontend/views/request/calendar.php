<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii2fullcalendar\yii2fullcalendar;

/* @var $this yii\web\View */
/* @var $searchModel common\models\RequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Calendar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="request-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= yii2fullcalendar::widget([
        'events'=> $events,
    ]);?>

</div>
