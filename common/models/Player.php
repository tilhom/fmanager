<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%player}}".
 *
 * @property integer $id
 * @property integer $club_id
 * @property string $name
 * @property integer $position
 * @property double $price
 * @property integer $selected
 * @property integer $total
 *
 * @property Position $position0
 * @property Club $club
 * @property PlayerMatch[] $playerMatches
 * @property Match[] $matchweeks
 * @property TeamContent[] $teamContents
 * @property TeamContent[] $teamContents0
 * @property TeamContent[] $teamContents1
 * @property TeamContent[] $teamContents2
 * @property TeamContent[] $teamContents3
 * @property TeamContent[] $teamContents4
 * @property TeamContent[] $teamContents5
 * @property TeamContent[] $teamContents6
 * @property TeamContent[] $teamContents7
 * @property TeamContent[] $teamContents8
 * @property TeamContent[] $teamContents9
 * @property TeamContent[] $teamContents10
 * @property TeamContent[] $teamContents11
 * @property TeamContent[] $teamContents12
 * @property TeamContent[] $teamContents13
 * @property Team[] $users
 */
class Player extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_player';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['club_id', 'position', 'selected', 'total'], 'integer'],
            [['price'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['position'], 'exist', 'skipOnError' => true, 'targetClass' => Position::className(), 'targetAttribute' => ['position' => 'id']],
            [['club_id'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['club_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'club_id' => 'Club ID',
            'name' => 'Name',
            'position' => 'Position',
            'price' => 'Price',
            'selected' => 'Selected',
            'total' => 'Total',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition0()
    {
        return $this->hasOne(Position::className(), ['id' => 'position']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClub()
    {
        return $this->hasOne(Club::className(), ['id' => 'club_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerMatches()
    {
        return $this->hasMany(PlayerMatch::className(), ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatchweeks()
    {
        return $this->hasMany(Match::className(), ['id' => 'matchweek_id'])->viaTable('{{%player_match}}', ['player_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents()
    {
        return $this->hasMany(TeamContent::className(), ['dr1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents0()
    {
        return $this->hasMany(TeamContent::className(), ['yah4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents1()
    {
        return $this->hasMany(TeamContent::className(), ['yah5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents2()
    {
        return $this->hasMany(TeamContent::className(), ['huj1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents3()
    {
        return $this->hasMany(TeamContent::className(), ['huj2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents4()
    {
        return $this->hasMany(TeamContent::className(), ['huj3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents5()
    {
        return $this->hasMany(TeamContent::className(), ['dr2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents6()
    {
        return $this->hasMany(TeamContent::className(), ['him1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents7()
    {
        return $this->hasMany(TeamContent::className(), ['him2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents8()
    {
        return $this->hasMany(TeamContent::className(), ['him3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents9()
    {
        return $this->hasMany(TeamContent::className(), ['him4' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents10()
    {
        return $this->hasMany(TeamContent::className(), ['him5' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents11()
    {
        return $this->hasMany(TeamContent::className(), ['yah1' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents12()
    {
        return $this->hasMany(TeamContent::className(), ['yah2' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents13()
    {
        return $this->hasMany(TeamContent::className(), ['yah3' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Team::className(), ['userid' => 'userid'])->viaTable('{{%team_content}}', ['dr1' => 'id']);
    }
}
