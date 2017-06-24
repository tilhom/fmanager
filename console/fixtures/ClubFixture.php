<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class ClubFixture extends ActiveFixture
{
    public $modelClass = 'common\models\Club';
    public $dataFile = '@console/fixtures/data/club.php';
}
