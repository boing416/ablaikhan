<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ExchangeProgram */

$this->title = 'Update Exchange Program: ' . ' ' . $model->exchange_program_id;
$this->params['breadcrumbs'][] = ['label' => 'Exchange Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exchange_program_id, 'url' => ['view', 'id' => $model->exchange_program_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exchange-program-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
