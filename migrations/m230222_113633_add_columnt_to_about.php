<?php

use yii\db\Migration;

/**
 * Class m230222_113633_add_columnt_to_about
 */
class m230222_113633_add_columnt_to_about extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }

    public function up()
    {
        $this->addColumn('{{%about}}', 'title', $this->string());
        $this->addColumn('{{%about}}', 'description', $this->text());
    }

    public function down()
    {
        return false;
    }
}