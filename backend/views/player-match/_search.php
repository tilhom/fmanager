<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\PlayerMatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'player_id') ?>

    <?= $form->field($model, 'matchweek_id') ?>

    <?= $form->field($model, 'minutes') ?>

    <?= $form->field($model, 'goal') ?>

    <?= $form->field($model, 'assists') ?>

    <?php // echo $form->field($model, 'clean') ?>

    <?php // echo $form->field($model, 'goal_conseded') ?>

    <?php // echo $form->field($model, 'own_goal') ?>

    <?php // echo $form->field($model, 'penalti_saved') ?>

    <?php // echo $form->field($model, 'penalti_missed') ?>

    <?php // echo $form->field($model, 'yellow_card') ?>

    <?php // echo $form->field($model, 'red_card') ?>

    <?php // echo $form->field($model, 'saves') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'matchweek_point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
