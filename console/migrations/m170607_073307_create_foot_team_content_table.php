<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_team_content`.
 */
class m170607_073307_create_foot_team_content_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_team_content', [
            'userid' => 'integer',
            'dr1' => 'integer',
            'dr2' => 'integer',
            'him1' => 'integer',
            'him2' => 'integer',
            'him3' => 'integer',
            'him4' => 'integer',
            'him5' => 'integer',
            'yah1' => 'integer',
            'yah2' => 'integer',
            'yah3' => 'integer',
            'yah4' => 'integer',
            'yah5' => 'integer',
            'huj1' => 'integer',
            'huj2' => 'integer',
            'huj3' => 'integer',
        ]);
        $this->addForeignKey ('foot_teamcontent_id', 'foot_team_content', 'userid', 'foot_team', 'userid', 'CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id11', 'foot_team_content', 'dr1', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id115', 'foot_team_content', 'dr2', 'foot_player', 'id','CASCADE','CASCADE');        
        $this->addForeignKey ('foot_team_content_id12', 'foot_team_content', 'him1', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id13', 'foot_team_content', 'him2', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id14', 'foot_team_content', 'him3', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id15', 'foot_team_content', 'him4', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id16', 'foot_team_content', 'him5', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id17', 'foot_team_content', 'yah1', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id18', 'foot_team_content', 'yah2', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id19', 'foot_team_content', 'yah3', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id110', 'foot_team_content', 'yah4', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id111', 'foot_team_content', 'yah5', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id112', 'foot_team_content', 'huj1', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id113', 'foot_team_content', 'huj2', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addForeignKey ('foot_team_content_id114', 'foot_team_content', 'huj3', 'foot_player', 'id','CASCADE','CASCADE');
        $this->addPrimaryKey('foot_team_content', 'foot_team_content', ['userid', 'dr1']);

    }

    public function safeDown()
    {
        $this->dropTable('foot_team_content');
    }
}
