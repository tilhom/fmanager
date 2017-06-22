<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TeamMatchSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-match-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'match_id') ?>

    <?= $form->field($model, 'dr1') ?>

    <?= $form->field($model, 'plr1') ?>

    <?= $form->field($model, 'plr2') ?>

    <?php // echo $form->field($model, 'plr3') ?>

    <?php // echo $form->field($model, 'plr4') ?>

    <?php // echo $form->field($model, 'plr5') ?>

    <?php // echo $form->field($model, 'plr6') ?>

    <?php // echo $form->field($model, 'plr7') ?>

    <?php // echo $form->field($model, 'plr8') ?>

    <?php // echo $form->field($model, 'plr9') ?>

    <?php // echo $form->field($model, 'plr10') ?>

    <?php // echo $form->field($model, 'dr2') ?>

    <?php // echo $form->field($model, 'zah1') ?>

    <?php // echo $form->field($model, 'zah2') ?>

    <?php // echo $form->field($model, 'zah3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
