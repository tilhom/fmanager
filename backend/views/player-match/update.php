<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PlayerMatch */

$this->title = 'Update Player Match: ' . $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Player Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->player_id, 'url' => ['view', 'player_id' => $model->player_id, 'matchweek_id' => $model->matchweek_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="player-match-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
