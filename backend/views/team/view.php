<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Team */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'name' => $model->name, 'overall_points' => $model->overall_points], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'name' => $model->name, 'overall_points' => $model->overall_points], [
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
            'name',
            'overall_points',
            'value',
            'budget',
            'MW_points',
            'MW_Rank',
            'overall_rank',
            'locale_rank',
        ],
    ]) ?>

</div>
