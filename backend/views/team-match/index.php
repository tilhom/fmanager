<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TeamMatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userid',
            'match_id',
            'dr1',
            'plr1',
            'plr2',
            // 'plr3',
            // 'plr4',
            // 'plr5',
            // 'plr6',
            // 'plr7',
            // 'plr8',
            // 'plr9',
            // 'plr10',
            // 'dr2',
            // 'zah1',
            // 'zah2',
            // 'zah3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
