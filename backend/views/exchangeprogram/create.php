<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Exchangeprogram */

$this->title = 'Новая программа';
$this->params['breadcrumbs'][] = ['label' => 'Программы студенческого обмена', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchangeprogram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
