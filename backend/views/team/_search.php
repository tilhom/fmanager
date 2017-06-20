<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TeamSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'overall_points') ?>

    <?= $form->field($model, 'value') ?>

    <?= $form->field($model, 'budget') ?>

    <?php // echo $form->field($model, 'MW_points') ?>

    <?php // echo $form->field($model, 'MW_Rank') ?>

    <?php // echo $form->field($model, 'overall_rank') ?>

    <?php // echo $form->field($model, 'locale_rank') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
