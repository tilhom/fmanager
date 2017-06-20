<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PlayerMatch */

$this->title = $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Player Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-match-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'player_id' => $model->player_id, 'matchweek_id' => $model->matchweek_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'player_id' => $model->player_id, 'matchweek_id' => $model->matchweek_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'player_id',
            'matchweek_id',
            'minutes',
            'goal',
            'assists',
            'clean',
            'goal_conseded',
            'own_goal',
            'penalti_saved',
            'penalti_missed',
            'yellow_card',
            'red_card',
            'saves',
            'price',
            'matchweek_point',
        ],
    ]) ?>

</div>
