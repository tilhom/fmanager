<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class PositionFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Position';
    public $dataFile = '@console/fixtures/data/position.php';
}
