<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class UserFixture extends ActiveFixture
{
    public $modelClass = 'common\models\User';
    public $dataFile = '@console/fixtures/data/user.php';
}
