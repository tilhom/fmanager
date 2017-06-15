<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_club`.
 */
class m170601_160029_create_foot_club_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('foot_club', [
        'id' => 'pk',
        'rank' => 'integer NOT NULL',
        'club' => 'string NOT NULL',
        'abbr' => 'string NOT NULL',
        'played' => 'integer NOT NULL',
        'points' => 'integer NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('foot_club');
    }
}
