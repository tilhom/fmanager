<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_team`.
 */
class m170606_080155_create_foot_team_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_team', [
            'userid' => 'integer',
            'name' => 'string',
            'overall_points' => 'integer',
            'value' => 'float',
            'budget' => 'float',
            'MW_points' => 'integer',
            'MW_Rank' => 'integer',
            'overall_rank' => 'integer',
            'locale_rank' => 'integer',

            
        ]);
        $this->addForeignKey ('foot_team_id', 'foot_team', 'userid', 'foot_user', 'id', 'CASCADE','CASCADE');
        $this->addPrimaryKey('foot_team', 'foot_team', ['name', 'overall_points']);

    }

    public function safeDown()
    {
        $this->dropTable('foot_team');
    }
}
