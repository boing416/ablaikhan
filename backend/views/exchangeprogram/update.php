<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Exchangeprogram */

//$this->title = 'Update Exchangeprogram: ' . ' ' . $model->exchange_program_id;
$this->title = 'Редактирование';
$this->params['breadcrumbs'][] = ['label' => 'Программы студенческого обмена', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exchange_program_id, 'url' => ['view', 'id' => $model->exchange_program_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exchangeprogram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
