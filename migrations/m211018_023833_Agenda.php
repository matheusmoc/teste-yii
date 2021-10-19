<?php

use yii\db\Migration;

/**
 * Class m211018_023833_Agenda
 */
class m211018_023833_Agenda extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('AGENDA',[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'data_inicio' => $this->text()->notNull(),
            'imagem_evento' =>$this->string()->notNull(),
            ]);
            $this->addForeignKey('post_foreing_key', 'AGENDA', 'POST_ID', 'POST', 'ID', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUE - 1*/,   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('post_foreing_key', 'AGENDA');
        $this->dropTable('AGENDA');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211018_023833_Agenda cannot be reverted.\n";

        return false;
    }
    */
}
