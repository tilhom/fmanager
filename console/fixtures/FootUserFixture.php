<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class FootUserFixture extends ActiveFixture
{
    public $modelClass = 'common\models\UserFoot';
    public $dataFile = '@console/fixtures/data/user_foot.php';
}
