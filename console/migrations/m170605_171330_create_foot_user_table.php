<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_user`.
 */
class m170605_171330_create_foot_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('foot_user', [
            'id' => 'pk',
            'phone' => 'integer',
            'password' => 'string',
            'code' => 'integer',
            
        ]);
        
    }

    public function down()
    {
        $this->dropTable('foot_user');
    }
}
