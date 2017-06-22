<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%player_match}}".
 *
 * @property integer $player_id
 * @property integer $matchweek_id
 * @property integer $minutes
 * @property integer $goal
 * @property integer $assists
 * @property integer $clean
 * @property integer $goal_conseded
 * @property integer $own_goal
 * @property integer $penalti_saved
 * @property integer $penalti_missed
 * @property integer $yellow_card
 * @property integer $red_card
 * @property integer $saves
 * @property double $price
 * @property integer $matchweek_point
 *
 * @property Match $matchweek
 * @property Player $player
 * @property TeamMatch[] $teamMatches
 * @property TeamMatch[] $teamMatches0
 * @property TeamMatch[] $teamMatches1
 * @property TeamMatch[] $teamMatches2
 * @property TeamMatch[] $teamMatches3
 * @property TeamMatch[] $teamMatches4
 * @property TeamMatch[] $teamMatches5
 * @property TeamMatch[] $teamMatches6
 * @property TeamMatch[] $teamMatches7
 * @property TeamMatch[] $teamMatches8
 * @property TeamMatch[] $teamMatches9
 * @property TeamMatch[] $teamMatches10
 * @property TeamMatch[] $teamMatches11
 * @property TeamMatch[] $teamMatches12
 * @property TeamMatch[] $teamMatches13
 * @property TeamMatch[] $teamMatches14
 * @property Team[] $users
 */
class PlayerMatch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_player_match';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'matchweek_id'], 'required'],
            [['player_id', 'matchweek_id', 'minutes', 'goal', 'assists', 'clean', 'goal_conseded', 'own_goal', 'penalti_saved', 'penalti_missed', 'yellow_card', 'red_card', 'saves', 'matchweek_point'], 'integer'],
            [['price'], 'number'],
            [['matchweek_id'], 'exist', 'skipOnError' => true, 'targetClass' => Match::className(), 'targetAttribute' => ['matchweek_id' => 'id']],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => Player::className(), 'targetAttribute' => ['player_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'Player ID',
            'matchweek_id' => 'Matchweek ID',
            'minutes' => 'Minutes',
            'goal' => 'Goal',
            'assists' => 'Assists',
            'clean' => 'Clean',
            'goal_conseded' => 'Goal Conseded',
            'own_goal' => 'Own Goal',
            'penalti_saved' => 'Penalti Saved',
            'penalti_missed' => 'Penalti Missed',
            'yellow_card' => 'Yellow Card',
            'red_card' => 'Red Card',
            'saves' => 'Saves',
            'price' => 'Price',
            'matchweek_point' => 'Matchweek Point',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatchweek()
    {
        return $this->hasOne(Match::className(), ['id' => 'matchweek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(Player::className(), ['id' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches()
    {
        return $this->hasMany(TeamMatch::className(), ['match_id' => 'matchweek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches0()
    {
        return $this->hasMany(TeamMatch::className(), ['dr1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches1()
    {
        return $this->hasMany(TeamMatch::className(), ['plr9' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches2()
    {
        return $this->hasMany(TeamMatch::className(), ['plr10' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches3()
    {
        return $this->hasMany(TeamMatch::className(), ['zah1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches4()
    {
        return $this->hasMany(TeamMatch::className(), ['zah2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches5()
    {
        return $this->hasMany(TeamMatch::className(), ['zah3' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches6()
    {
        return $this->hasMany(TeamMatch::className(), ['dr2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches7()
    {
        return $this->hasMany(TeamMatch::className(), ['plr1' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches8()
    {
        return $this->hasMany(TeamMatch::className(), ['plr2' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches9()
    {
        return $this->hasMany(TeamMatch::className(), ['plr3' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches10()
    {
        return $this->hasMany(TeamMatch::className(), ['plr4' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches11()
    {
        return $this->hasMany(TeamMatch::className(), ['plr5' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches12()
    {
        return $this->hasMany(TeamMatch::className(), ['plr6' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches13()
    {
        return $this->hasMany(TeamMatch::className(), ['plr7' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches14()
    {
        return $this->hasMany(TeamMatch::className(), ['plr8' => 'player_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(Team::className(), ['userid' => 'userid'])->viaTable('{{%team_match}}', ['match_id' => 'matchweek_id']);
    }
}
