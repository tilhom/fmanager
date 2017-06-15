<?php

use yii\db\Migration;

/**
 * Handles the creation of table `foot_position`.
 */
class m170531_165547_create_foot_position_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('foot_position', [
            'id' => 'pk',
            'abbr' => 'string',
            'name' => 'string',
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('foot_position');
    }
}
