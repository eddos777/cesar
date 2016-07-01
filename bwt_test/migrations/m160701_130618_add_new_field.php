<?php

use yii\db\Migration;

class m160701_130618_add_new_field extends Migration
{
    public function up()
    {
        $this->addColumn("users", "auth_key", $this->string(80));
        $this->addColumn("users", "password_reset_token", $this->string(80));
    }

    public function down()
    {
        echo "m160701_130618_add_new_field cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
