<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Exchangeprogram */

$this->title = 'Create Exchangeprogram';
$this->params['breadcrumbs'][] = ['label' => 'Exchangeprograms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="exchangeprogram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
