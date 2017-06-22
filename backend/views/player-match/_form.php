<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\PlayerMatch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-match-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

    <?= $form->field($model, 'matchweek_id')->textInput() ?>

    <?= $form->field($model, 'minutes')->textInput() ?>

    <?= $form->field($model, 'goal')->textInput() ?>

    <?= $form->field($model, 'assists')->textInput() ?>

    <?= $form->field($model, 'clean')->textInput() ?>

    <?= $form->field($model, 'goal_conseded')->textInput() ?>

    <?= $form->field($model, 'own_goal')->textInput() ?>

    <?= $form->field($model, 'penalti_saved')->textInput() ?>

    <?= $form->field($model, 'penalti_missed')->textInput() ?>

    <?= $form->field($model, 'yellow_card')->textInput() ?>

    <?= $form->field($model, 'red_card')->textInput() ?>

    <?= $form->field($model, 'saves')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'matchweek_point')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
