<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TeamContent */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'Team Contents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-content-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'userid' => $model->userid, 'dr1' => $model->dr1], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'userid' => $model->userid, 'dr1' => $model->dr1], [
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
            'dr1',
            'dr2',
            'him1',
            'him2',
            'him3',
            'him4',
            'him5',
            'yah1',
            'yah2',
            'yah3',
            'yah4',
            'yah5',
            'huj1',
            'huj2',
            'huj3',
        ],
    ]) ?>

</div>
