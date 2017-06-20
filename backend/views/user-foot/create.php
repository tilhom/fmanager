<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\UserFoot */

$this->title = 'Create User Foot';
$this->params['breadcrumbs'][] = ['label' => 'User Feet', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-foot-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
