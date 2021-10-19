<?php

use yii\db\Migration;

/**
 * Class m210922_194705_Post
 */
class m210922_194705_Post extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('POST', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
        ]);

        $this->insert('POST', [
            'title' => 'title 1',
            'content' => 'content 1',
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('POST', ['id' => 1]);
        $this->dropTable('POST');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210922_194705_Post cannot be reverted.\n";

        return false;
    }
    */
}
