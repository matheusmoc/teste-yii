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
            'ID'=>$this->primaryKey(),
            'TITLE' =>$this->string(),
            'CONTENT'=>$this->string(),
            'IMAGE'=>$this->string(),
        ]);
        $this->addForeignKey('post_fk', 'USUARIO', 'POST_ID', 'POST', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUR - 1*/,   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('post_fk', 'POST');
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
