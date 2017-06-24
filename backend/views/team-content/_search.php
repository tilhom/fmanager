<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\search\TeamContentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'userid') ?>

    <?= $form->field($model, 'dr1') ?>

    <?= $form->field($model, 'dr2') ?>

    <?= $form->field($model, 'him1') ?>

    <?= $form->field($model, 'him2') ?>

    <?php // echo $form->field($model, 'him3') ?>

    <?php // echo $form->field($model, 'him4') ?>

    <?php // echo $form->field($model, 'him5') ?>

    <?php // echo $form->field($model, 'yah1') ?>

    <?php // echo $form->field($model, 'yah2') ?>

    <?php // echo $form->field($model, 'yah3') ?>

    <?php // echo $form->field($model, 'yah4') ?>

    <?php // echo $form->field($model, 'yah5') ?>

    <?php // echo $form->field($model, 'huj1') ?>

    <?php // echo $form->field($model, 'huj2') ?>

    <?php // echo $form->field($model, 'huj3') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
