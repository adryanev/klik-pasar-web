<?php

use yii\db\Migration;

/**
 * Class m190313_134652_foreign_key_db
 */
class m190313_134652_foreign_key_db extends Migration
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
        echo "m190313_134652_foreign_key_db cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190313_134652_foreign_key_db cannot be reverted.\n";

        return false;
    }
    */
}
