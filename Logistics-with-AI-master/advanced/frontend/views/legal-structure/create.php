<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LegalStructure */

$this->title = 'Create Legal Structure';
$this->params['breadcrumbs'][] = ['label' => 'Legal Structures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="legal-structure-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
