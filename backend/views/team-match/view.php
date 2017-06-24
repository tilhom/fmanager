<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TeamMatch */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Team Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-match-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'userid' => $model->userid, 'match_id' => $model->match_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'userid' => $model->userid, 'match_id' => $model->match_id], [
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
            'userid',
            'match_id',
            'dr1',
            'plr1',
            'plr2',
            'plr3',
            'plr4',
            'plr5',
            'plr6',
            'plr7',
            'plr8',
            'plr9',
            'plr10',
            'dr2',
            'zah1',
            'zah2',
            'zah3',
        ],
    ]) ?>

</div>
