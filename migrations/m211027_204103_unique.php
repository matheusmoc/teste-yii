<?php

use yii\db\Migration;

/**
 * Class m211027_204103_unique
 */
class m211027_204103_unique extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('usuario', 'LOGIN', 'string unique');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('usuario', 'LOGIN', 'string');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211027_204103_unique cannot be reverted.\n";

        return false;
    }
    */
}
