<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170425_081151_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'password' => 'string NOT NULL',
            'email' => 'string NOT NULL',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
