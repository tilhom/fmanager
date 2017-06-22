<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%team_content}}".
 *
 * @property integer $userid
 * @property integer $dr1
 * @property integer $dr2
 * @property integer $him1
 * @property integer $him2
 * @property integer $him3
 * @property integer $him4
 * @property integer $him5
 * @property integer $yah1
 * @property integer $yah2
 * @property integer $yah3
 * @property integer $yah4
 * @property integer $yah5
 * @property integer $huj1
 * @property integer $huj2
 * @property integer $huj3
 *
 * @property Team $user
 * @property Player $dr10
 * @property Player $yah40
 * @property Player $yah50
 * @property Player $huj10
 * @property Player $huj20
 * @property Player $huj30
 * @property Player $dr20
 * @property Player $him10
 * @property Player $him20
 * @property Player $him30
 * @property Player $him40
 * @property Player $him50
 * @property Player $yah10
 * @property Player $yah20
 * @property Player $yah30
 */
class TeamContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_team_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'dr1'], 'required'],
            [['userid', 'dr1', 'dr2', 'him1', 'him2', 'him3', 'him4', 'him5', 'yah1', 'yah2', 'yah3', 'yah4', 'yah5', 'huj1', 'huj2', 'huj3'], 'integer'],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => Team::className(), 'targetAttribute' => ['userid' => 'userid']],
            [['dr1'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['dr1' => 'id']],
            [['yah4'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['yah4' => 'id']],
            [['yah5'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['yah5' => 'id']],
            [['huj1'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['huj1' => 'id']],
            [['huj2'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['huj2' => 'id']],
            [['huj3'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['huj3' => 'id']],
            [['dr2'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['dr2' => 'id']],
            [['him1'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['him1' => 'id']],
            [['him2'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['him2' => 'id']],
            [['him3'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['him3' => 'id']],
            [['him4'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['him4' => 'id']],
            [['him5'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['him5' => 'id']],
            [['yah1'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['yah1' => 'id']],
            [['yah2'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['yah2' => 'id']],
            [['yah3'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['yah3' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'dr1' => 'Dr1',
            'dr2' => 'Dr2',
            'him1' => 'Him1',
            'him2' => 'Him2',
            'him3' => 'Him3',
            'him4' => 'Him4',
            'him5' => 'Him5',
            'yah1' => 'Yah1',
            'yah2' => 'Yah2',
            'yah3' => 'Yah3',
            'yah4' => 'Yah4',
            'yah5' => 'Yah5',
            'huj1' => 'Huj1',
            'huj2' => 'Huj2',
            'huj3' => 'Huj3',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Team::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr10()
    {
        return $this->hasOne(Player::className(), ['id' => 'dr1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah40()
    {
        return $this->hasOne(Player::className(), ['id' => 'yah4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah50()
    {
        return $this->hasOne(Player::className(), ['id' => 'yah5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj10()
    {
        return $this->hasOne(Player::className(), ['id' => 'huj1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj20()
    {
        return $this->hasOne(Player::className(), ['id' => 'huj2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHuj30()
    {
        return $this->hasOne(Player::className(), ['id' => 'huj3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr20()
    {
        return $this->hasOne(Player::className(), ['id' => 'dr2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim10()
    {
        return $this->hasOne(Player::className(), ['id' => 'him1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim20()
    {
        return $this->hasOne(Player::className(), ['id' => 'him2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim30()
    {
        return $this->hasOne(Player::className(), ['id' => 'him3']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim40()
    {
        return $this->hasOne(Player::className(), ['id' => 'him4']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHim50()
    {
        return $this->hasOne(Player::className(), ['id' => 'him5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah10()
    {
        return $this->hasOne(Player::className(), ['id' => 'yah1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah20()
    {
        return $this->hasOne(Player::className(), ['id' => 'yah2']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getYah30()
    {
        return $this->hasOne(Player::className(), ['id' => 'yah3']);
    }
}
