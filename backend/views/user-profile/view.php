<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */

$this->title = $model->userid;
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'userid' => $model->userid, 'fname' => $model->fname], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'userid' => $model->userid, 'fname' => $model->fname], [
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
            'fname',
            'lname',
            'sex',
            'birthday',
            'email:email',
            'f_club',
        ],
    ]) ?>

</div>
