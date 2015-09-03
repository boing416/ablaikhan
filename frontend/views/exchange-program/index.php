<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchExchangeProgram */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Exchange Programs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchange-program-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Exchange Program', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'exchange_program_id',
            'university_id',
            'specialty_id',
            'period',
            'language_id',
            // 'conditions:ntext',
            // 'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
