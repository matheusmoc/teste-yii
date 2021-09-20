<?php

use yii\db\Migration;

/**
 * Class m210920_180321_Usuario
 */
class m210920_180321_Usuario extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('USUARIO', [
            'ID'=>$this->primaryKey(),
            'LOGIN' =>$this->string(),
            'SENHA'=>$this->string(),
            'NAME'=>$this->string()->notNull(),
            'NUCLEO_ID'=>$this->integer(),
        ]);
        $this->addForeignKey('nucleo_fk', 'USUARIO', 'NUCLEO_ID', 'NUCLEO', 'RESTRICT' /*CASCADE*/ /*SET NULL*/ /*SET VALUR - 1*/,   );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('nucleo_fk', 'USUARIO');
        $this->dropTable('USUARIO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210920_180321_Usuario cannot be reverted.\n";

        return false;
    }
    */
}
