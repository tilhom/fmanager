<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_player_match`.
 */
class m170605_061202_create_foot_player_match_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_player_match', [
            'player_id' => 'integer',
            'matchweek_id' => 'integer',
            'minutes' => 'integer',
            'goal' => 'integer',
            'assists' => 'integer',
            'clean' => 'integer',
            'goal_conseded' => 'integer',
            'own_goal' => 'integer',
            'penalti_saved' => 'integer',
            'penalti_missed' => 'integer',
            'yellow_card' => 'integer',
            'red_card' => 'integer',
            'saves' => 'integer',
            'price' => 'float',
            'matchweek_point' => 'integer',
            
        ]);
        $this->addForeignKey ('match_player_id', 'foot_player_match', 'player_id', 'foot_player', 'id', 'CASCADE','CASCADE');
        $this->addForeignKey ('foot_matchweek_id', 'foot_player_match', 'matchweek_id', 'foot_match', 'id','CASCADE','CASCADE');
        $this->addPrimaryKey('foot_player_match', 'foot_player_match', ['player_id', 'matchweek_id']);
    }

    public function safeDown()
    {
        $this->dropTable('foot_player_match');
    }
}
