<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SearchExchangeProgram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exchange-program-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'exchange_program_id') ?>

    <?= $form->field($model, 'university_id') ?>

    <?= $form->field($model, 'specialty_id') ?>

    <?= $form->field($model, 'period') ?>

    <?= $form->field($model, 'language_id') ?>

    <?php // echo $form->field($model, 'conditions') ?>

    <?php // echo $form->field($model, 'date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
