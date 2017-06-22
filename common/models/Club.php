<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "foot_club".
 *
 * @property integer $id
 * @property integer $rank
 * @property string $img
 * @property string $club
 * @property string $abbr
 * @property integer $played
 * @property integer $points
 *
 * @property Match[] $matches
 * @property Match[] $matches0
 * @property Player[] $players
 */
class Club extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_club';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rank', 'img', 'club', 'abbr', 'played', 'points'], 'required'],
            [['rank', 'played', 'points'], 'integer'],
            [['img', 'club', 'abbr'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rank' => 'Rank',
            'img' => 'Img',
            'club' => 'Club',
            'abbr' => 'Abbr',
            'played' => 'Played',
            'points' => 'Points',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(Match::className(), ['team1_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches0()
    {
        return $this->hasMany(Match::className(), ['team2_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['club_id' => 'id']);
    }
}
