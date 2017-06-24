<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserProfile */

$this->title = 'Create User Profile';
$this->params['breadcrumbs'][] = ['label' => 'User Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-profile-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
