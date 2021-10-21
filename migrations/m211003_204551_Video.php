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
        'ID' => $this->primaryKey(),
        'title' => $this->string()->notNull(),
        'content' => $this->string()->notNull(),
        'description'=> $this->text(),
        'POST_ID' => $this->integer(),
        'USUARIO_ID' => $this->integer(),


        ]);
        $this->addForeignKey('post_c1_fk', 'VIDEO', 'POST_ID', 'POST', 'ID', 'RESTRICT', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUE - 1*/   );
        $this->addForeignKey('user_c1_fk', 'VIDEO', 'USUARIO_ID', 'USUARIO', 'ID', 'RESTRICT',  'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUE - 1*/   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('user_c1_fK', 'VIDEO');
        $this->dropForeignKey('post_c1_fK', 'VIDEO');
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
