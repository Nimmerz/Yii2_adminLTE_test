<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m170425_133015_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'post' => 'text',
            'user_id' => 'int',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}
