<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Exchangeprogram */

$this->title = 'Update Exchangeprogram: ' . ' ' . $model->exchange_program_id;
$this->params['breadcrumbs'][] = ['label' => 'Exchangeprograms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->exchange_program_id, 'url' => ['view', 'id' => $model->exchange_program_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="exchangeprogram-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
