<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, 'match_id')->textInput() ?>

    <?= $form->field($model, 'dr1')->textInput() ?>

    <?= $form->field($model, 'plr1')->textInput() ?>

    <?= $form->field($model, 'plr2')->textInput() ?>

    <?= $form->field($model, 'plr3')->textInput() ?>

    <?= $form->field($model, 'plr4')->textInput() ?>

    <?= $form->field($model, 'plr5')->textInput() ?>

    <?= $form->field($model, 'plr6')->textInput() ?>

    <?= $form->field($model, 'plr7')->textInput() ?>

    <?= $form->field($model, 'plr8')->textInput() ?>

    <?= $form->field($model, 'plr9')->textInput() ?>

    <?= $form->field($model, 'plr10')->textInput() ?>

    <?= $form->field($model, 'dr2')->textInput() ?>

    <?= $form->field($model, 'zah1')->textInput() ?>

    <?= $form->field($model, 'zah2')->textInput() ?>

    <?= $form->field($model, 'zah3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
