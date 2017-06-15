<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_player`.
 */
class m170601_161330_create_foot_player_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_player', [
            'id' => 'pk',
            'club_id' => 'integer',
            'name' => 'string',
            'position' => 'integer',
            'price' => 'float',
            'selected' => 'integer',
            'total' => 'integer',
        ]);
        $this->addForeignKey ('club_play_id', 'foot_player', 'club_id', 'foot_club', 'id', 'CASCADE');
        $this->addForeignKey ('club_position_id', 'foot_player', 'position', 'foot_position', 'id','CASCADE','CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('foot_player');
    }
}
