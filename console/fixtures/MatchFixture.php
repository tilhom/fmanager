<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class MatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Match';
    public $dataFile = '@console/fixtures/data/match.php';
}
