<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchExchangeprogram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exchangeprogram-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'exchange_program_id') ?>

    <?= $form->field($model, 'university_id') ?>

    <?= $form->field($model, 'university_name') ?>

    <?= $form->field($model, 'language_name') ?>

    <?= $form->field($model, 'country') ?>

    <?php // echo $form->field($model, 'specialty_id') ?>

    <?php // echo $form->field($model, 'specialty_name') ?>

    <?php // echo $form->field($model, 'period') ?>

    <?php // echo $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'conditions') ?>

    <?php // echo $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'images') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
