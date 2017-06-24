<?php
namespace console\fixtures;

use yii\test\ActiveFixture;

class UserProfileFixture extends ActiveFixture
{
    public $modelClass = 'common\models\UserProfile';
    public $dataFile = '@console/fixtures/data/user_profile.php';
}
