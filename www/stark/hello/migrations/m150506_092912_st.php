<?php

use yii\db\Schema;
use yii\db\Migration;

class m150506_092912_st extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        $this->createTable('{{%article}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'url' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_DATE . ' NOT NULL',
            'updated_at' => Schema::TYPE_DATE . ' NOT NULL',
            'status' => Schema::TYPE_BOOLEAN . ' NOT NULL',
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%article}}');
    }
}