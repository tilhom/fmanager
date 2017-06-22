<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class TeamMatchFixture extends ActiveFixture
{
    public $modelClass = 'common\models\TeamMatch';
    public $dataFile = '@console/fixtures/data/team_match.php';
}
