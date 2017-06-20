<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamContent */

$this->title = 'Create Team Content';
$this->params['breadcrumbs'][] = ['label' => 'Team Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
