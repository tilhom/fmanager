<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_team_match`.
 */
class m170606_163850_create_foot_team_match_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_team_match', [
            'userid' => 'integer',
            'match_id' => 'integer',
            'dr1' => 'integer',
            'plr1' => 'integer',
            'plr2' => 'integer',
            'plr3' => 'integer',
            'plr4' => 'integer',
            'plr5' => 'integer',
            'plr6' => 'integer',
            'plr7' => 'integer',
            'plr8' => 'integer',
            'plr9' => 'integer',
            'plr10' => 'integer',
            'dr2' => 'integer',
            'zah1' => 'integer',
            'zah2' => 'integer',
            'zah3' => 'integer',
            
        ]);
        $this->addForeignKey ('user_match_player_id', 'foot_team_match', 'userid', 'foot_team', 'userid', 'CASCADE','CASCADE');
        $this->addForeignKey ('team_match_id', 'foot_team_match', 'match_id', 'foot_match', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_matchweek_id', 'foot_team_match', 'match_id', 'foot_player_match', 'matchweek_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id1', 'foot_team_match', 'dr1', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id2', 'foot_team_match', 'plr1', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id3', 'foot_team_match', 'plr2', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id4', 'foot_team_match', 'plr3', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id5', 'foot_team_match', 'plr4', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id6', 'foot_team_match', 'plr5', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id7', 'foot_team_match', 'plr6', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id8', 'foot_team_match', 'plr7', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id9', 'foot_team_match', 'plr8', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id10', 'foot_team_match', 'plr9', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id11', 'foot_team_match', 'plr10', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id12', 'foot_team_match', 'zah1', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id13', 'foot_team_match', 'zah2', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id14', 'foot_team_match', 'zah3', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_playerweek_id15', 'foot_team_match', 'dr2', 'foot_player_match', 'player_id','CASCADE','CASCADE');
        $this->addPrimaryKey('foot_team_match', 'foot_team_match', ['userid', 'match_id']);
    }

    public function safeDown()
    {
        $this->dropTable('foot_team_match');
    }
}
