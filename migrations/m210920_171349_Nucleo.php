<?php

use yii\db\Migration;

/**
 * Class m210920_171349_Nucleo
 */
class m210920_171349_Nucleo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('NUCLEO', [
            'ID'=>$this->primaryKey(),
            'NAME'=>$this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('NUCLEO');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210920_171349_Nucleo cannot be reverted.\n";

        return false;
    }
    */
}
