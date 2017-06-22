<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%match}}".
 *
 * @property integer $id
 * @property integer $matchweek
 * @property string $data_time
 * @property integer $team1_id
 * @property integer $team2_id
 * @property integer $team1_score
 * @property integer $team2_score
 *
 * @property Club $team2
 * @property Club $team1
 * @property PlayerMatch[] $playerMatches
 * @property Player[] $players
 * @property TeamMatch[] $teamMatches
 * @property Team[] $users
 */
class Match extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matchweek', 'team1_id', 'team2_id', 'team1_score', 'team2_score'], 'integer'],
            [['data_time'], 'string', 'max' => 255],
            [['team2_id'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['team2_id' => 'id']],
            [['team1_id'], 'exist', 'skipOnError' => true, 'targetClass' => Club::className(), 'targetAttribute' => ['team1_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matchweek' => 'Matchweek',
            'data_time' => 'Data Time',
            'team1_id' => 'Team1 ID',
            'team2_id' => 'Team2 ID',
            'team1_score' => 'Team1 Score',
            'team2_score' => 'Team2 Score',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam2()
    {
        return $this->hasOne(Club::className(), ['id' => 'team2_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam1()
    {
        return $this->hasOne(Club::className(), ['id' => 'team1_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayerMatches()
    {
        return $this->hasMany(PlayerMatch::className(), ['matchweek_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayers()
    {
        return $this->hasMany(Player::className(), ['id' => 'player_id'])->viaTable('{{%player_match}}', ['matchweek_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches()
    {
        return $this->hasMany(TeamMatch::className(), ['match_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Team::className(), ['userid' => 'userid'])->viaTable('{{%team_match}}', ['match_id' => 'id']);
    }
}
