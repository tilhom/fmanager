<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TeamMatch */

$this->title = 'Create Team Match';
$this->params['breadcrumbs'][] = ['label' => 'Team Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
