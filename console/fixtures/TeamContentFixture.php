<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class TeamContentFixture extends ActiveFixture
{
    public $modelClass = 'common\models\TeamContent';
    public $dataFile = '@console/fixtures/data/team_content.php';
}
