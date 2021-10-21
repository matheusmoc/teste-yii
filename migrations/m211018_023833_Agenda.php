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
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
            'POST_ID' => $this->integer(),
            ]);
            $this->addForeignKey('post_c2_fk', 'AGENDA', 'POST_ID', 'POST', 'ID', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUE - 1*/,   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('post_c2_fK', 'AGENDA');
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
