<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ExchangeProgram */

$this->title = 'Create Exchange Program';
$this->params['breadcrumbs'][] = ['label' => 'Exchange Programs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchange-program-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
