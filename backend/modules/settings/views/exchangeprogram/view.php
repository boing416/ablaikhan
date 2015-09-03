<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Exchangeprogram */

$this->title = $model->exchange_program_id;
$this->params['breadcrumbs'][] = ['label' => 'Exchangeprograms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchangeprogram-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->exchange_program_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->exchange_program_id], [
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
            'exchange_program_id',
            'university_id',
            'country',
            'specialty_id',
            'specialty_name',
            'period',
            'language_id',
            'conditions:ntext',
            'date',
        ],
    ]) ?>

</div>
