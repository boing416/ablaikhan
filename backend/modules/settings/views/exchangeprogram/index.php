<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\settings\models\SearchExchangeprogram */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exchangeprograms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchangeprogram-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exchangeprogram', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'exchange_program_id',
            'university_id',
            'country',
            'specialty_id',
            'specialty_name',
            // 'period',
            // 'language_id',
            // 'conditions:ntext',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
