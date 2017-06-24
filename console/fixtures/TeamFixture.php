<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class TeamFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Team';
    public $dataFile = '@console/fixtures/data/team.php';
}
