<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Match */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'matchweek')->textInput() ?>

    <?= $form->field($model, 'data_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team1_id')->textInput() ?>

    <?= $form->field($model, 'team2_id')->textInput() ?>

    <?= $form->field($model, 'team1_score')->textInput() ?>

    <?= $form->field($model, 'team2_score')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
