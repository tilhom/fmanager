<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class PlayerMatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\PlayerMatch';
    public $dataFile = '@console/fixtures/data/player_match.php';
}
