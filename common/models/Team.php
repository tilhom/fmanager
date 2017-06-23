<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%team}}".
 *
 * @property integer $userid
 * @property string $name
 * @property integer $overall_points
 * @property double $value
 * @property double $budget
 * @property integer $MW_points
 * @property integer $MW_Rank
 * @property integer $overall_rank
 * @property integer $locale_rank
 *
 * @property User $user
 * @property TeamContent[] $teamContents
 * @property Player[] $dr1s
 * @property TeamMatch[] $teamMatches
 * @property PlayerMatch[] $matches
 * @property Match[] $matches0
 */
class Team extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'foot_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'overall_points', 'MW_points', 'MW_Rank', 'overall_rank', 'locale_rank'], 'integer'],
            [['name', 'overall_points'], 'required'],
            [['value', 'budget'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userid' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userid' => 'Userid',
            'name' => 'Name',
            'overall_points' => 'Overall Points',
            'value' => 'Value',
            'budget' => 'Budget',
            'MW_points' => 'Mw Points',
            'MW_Rank' => 'Mw  Rank',
            'overall_rank' => 'Overall Rank',
            'locale_rank' => 'Locale Rank',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamContents()
    {
        return $this->hasMany(TeamContent::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDr1s()
    {
        return $this->hasMany(Player::className(), ['id' => 'dr1'])->viaTable('{{%team_content}}', ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeamMatches()
    {
        return $this->hasMany(TeamMatch::className(), ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(PlayerMatch::className(), ['matchweek_id' => 'match_id'])->viaTable('{{%team_match}}', ['userid' => 'userid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches0()
    {
        return $this->hasMany(Match::className(), ['id' => 'match_id'])->viaTable('{{%team_match}}', ['userid' => 'userid']);
    }
}
