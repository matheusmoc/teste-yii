<?php

use yii\db\Migration;

/**
 * Class m211003_204551_Video_post
 */
class m211003_204551_Video extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('VIDEO',[
        'id' => $this->primaryKey(),
        'title' => $this->string()->notNull(),
        'content' => $this->string()->notNull(),
        'description'=> $this->text(),
        ]);
        $this->addForeignKey('post_foreingkey', 'VIDEO', 'POST_ID', 'POST', 'ID', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUE - 1*/,   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('post_foreingkey', 'VIDEOPOST');
        $this->dropTable('VIDEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211003_204551_Video_post cannot be reverted.\n";

        return false;
    }
    */
}
