<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->registerJsFile('/js/script.js');

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchExchangeprogram */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Программы студенческого обмена';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchangeprogram-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'exchange_program_id',
//            'university_id',
            'university_name',
            'language_name',
            'country',
            // 'specialty_id',
             'specialty_name',
             'period',
            // 'language_id',
             'conditions:ntext',
             'date',
            // 'images',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
