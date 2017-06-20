<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_user2".
 *
 * @property integer $id
 * @property integer $phone
 * @property string $password
 * @property integer $code
 */
class UserFoot extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_user2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['phone', 'code'], 'integer'],
            [['password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Phone',
            'password' => 'Password',
            'code' => 'Code',
        ];
    }
}
