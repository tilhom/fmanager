<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TeamContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Contents';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-content-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Team Content', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'userid',
            'dr1',
            'dr2',
            'him1',
            'him2',
            // 'him3',
            // 'him4',
            // 'him5',
            // 'yah1',
            // 'yah2',
            // 'yah3',
            // 'yah4',
            // 'yah5',
            // 'huj1',
            // 'huj2',
            // 'huj3',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
