<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Specialities */

$this->title = 'Update Specialities: ' . ' ' . $model->specialty_id;
$this->params['breadcrumbs'][] = ['label' => 'Specialities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->specialty_id, 'url' => ['view', 'id' => $model->specialty_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="specialities-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
