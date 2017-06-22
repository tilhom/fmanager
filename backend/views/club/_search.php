<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\ClubSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="club-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rank') ?>

    <?= $form->field($model, 'img') ?>

    <?= $form->field($model, 'club') ?>

    <?= $form->field($model, 'abbr') ?>

    <?php // echo $form->field($model, 'played') ?>

    <?php // echo $form->field($model, 'points') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
