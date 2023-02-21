<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Class m230221_100430_create_files_table
 */
class m230221_100430_create_files_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rooms', [
            'id' => $this->primaryKey(),
            'extension' => $this->string()->notNull(),
            'description' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230221_100430_create_table_rooms cannot be reverted.\n";

        return false;
    }

    public function down()
    {
        $this->dropTable('rooms');
    }
}
