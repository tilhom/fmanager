<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_user_profile`.
 */
class m170605_172255_create_foot_user_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('foot_user_profile', [
            'userid' => 'integer',
            'fname' => 'string',
            'lname' => 'string',
            'sex' => 'string',
            'birthday' => 'string',
            'email' => 'string',
            'f_club' => 'string',

            
        ]);
        $this->addForeignKey ('user_profile_id', 'foot_user_profile', 'userid', 'foot_user', 'id', 'CASCADE','CASCADE');
        $this->addPrimaryKey('foot_user_profile', 'foot_user_profile', ['userid', 'fname']);

    }

    public function safeDown()
    {
        $this->dropTable('foot_user_profile');
    }
}
