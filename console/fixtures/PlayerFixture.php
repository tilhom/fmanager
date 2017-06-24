<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class PlayerFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Player';
    public $dataFile = '@console/fixtures/data/player.php';
}
