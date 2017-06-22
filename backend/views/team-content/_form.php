<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TeamContent */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="team-content-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, 'dr1')->textInput() ?>

    <?= $form->field($model, 'dr2')->textInput() ?>

    <?= $form->field($model, 'him1')->textInput() ?>

    <?= $form->field($model, 'him2')->textInput() ?>

    <?= $form->field($model, 'him3')->textInput() ?>

    <?= $form->field($model, 'him4')->textInput() ?>

    <?= $form->field($model, 'him5')->textInput() ?>

    <?= $form->field($model, 'yah1')->textInput() ?>

    <?= $form->field($model, 'yah2')->textInput() ?>

    <?= $form->field($model, 'yah3')->textInput() ?>

    <?= $form->field($model, 'yah4')->textInput() ?>

    <?= $form->field($model, 'yah5')->textInput() ?>

    <?= $form->field($model, 'huj1')->textInput() ?>

    <?= $form->field($model, 'huj2')->textInput() ?>

    <?= $form->field($model, 'huj3')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
