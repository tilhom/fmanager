<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\MatchSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Matches';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="match-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Match', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'matchweek',
            'data_time',
            'team1_id',
            'team2_id',
            // 'team1_score',
            // 'team2_score',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
