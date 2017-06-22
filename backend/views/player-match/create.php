<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PlayerMatch */

$this->title = 'Create Player Match';
$this->params['breadcrumbs'][] = ['label' => 'Player Matches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="player-match-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
