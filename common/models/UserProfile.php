<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%user_profile}}".
 *
 * @property integer $userid
 * @property string $fname
 * @property string $lname
 * @property string $sex
 * @property string $birthday
 * @property string $email
 * @property string $f_club
 *
 * @property User $user
 */
class UserProfile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_user_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'fname'], 'required'],
            [['userid'], 'integer'],
            [['fname', 'lname', 'sex', 'birthday', 'email', 'f_club'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => UserFoot::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            'email' => 'Email',
            'f_club' => 'F Club',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserFoot::className(), ['id' => 'userid']);
    }
}
