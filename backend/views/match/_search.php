<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\MatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'matchweek') ?>

    <?= $form->field($model, 'data_time') ?>

    <?= $form->field($model, 'team1_id') ?>

    <?= $form->field($model, 'team2_id') ?>

    <?php // echo $form->field($model, 'team1_score') ?>

    <?php // echo $form->field($model, 'team2_score') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
