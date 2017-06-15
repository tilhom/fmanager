<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_match`.
 */
class m170605_055748_create_foot_match_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_match', [
            'id' => 'pk',
            'matchweek' => 'integer',
            'data_time' => 'string',
            'team1_id' => 'integer',
            'team2_id' => 'integer',
            'team1_score' => 'integer',
            'team2_score' => 'integer',
            
        ]);
        $this->addForeignKey ('match_club_id', 'foot_match', 'team1_id', 'foot_club', 'id', 'CASCADE','CASCADE');
        $this->addForeignKey ('match_club_id2', 'foot_match', 'team2_id', 'foot_club', 'id','CASCADE','CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('foot_match');
    }
}
