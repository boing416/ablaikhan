<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Exchangeprogram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="exchangeprogram-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
//    $form->field($model, 'university_id')->textInput()
    ?>

    <?= $form->field($model, 'university_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'language_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?php
//    $form->field($model, 'specialty_id')->textInput()
    ?>

    <?= $form->field($model, 'specialty_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'period')->textInput(['maxlength' => true]) ?>

    <?php
//    $form->field($model, 'language_id')->textInput()
    ?>

    <?= $form->field($model, 'conditions')->textarea(['rows' => 6]) ?>

    <?php
//    $form->field($model, 'date')->textInput()
    ?>

    <?= $form->field($model, 'date')->widget(
        DatePicker::className(), [
        // inline too, not bad
        'language' => 'ru',
        'inline' => false,
        // modify template for custom rendering
//            'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',

        ]
    ]);?>

    <?php
//    $form->field($model, 'images')->textInput(['maxlength' => true])
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
