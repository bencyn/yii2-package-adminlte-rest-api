<?php

use yii\db\Migration;

/**
 * Class m180111_084830_test_table
 */
class m180111_084830_test_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
         $this->createTable("tests", [
            "id" => $this->primaryKey(),
            "name" => $this->string()->notNull()->unique(),
            "email" => $this->string()->notNull()->unique(),
         ]);
         $this->batchInsert("tests", ["name", "email"], [
            ["User1", "user1@gmail.com"],
            ["User2", "user2@gmail.com"],
            ["User3", "user3@gmail.com"],
            ["User4", "user4@gmail.com"],
            ["User5", "user5@gmail.com"], 
            ["User6", "user6@gmail.com"],
            ["User7", "user7@gmail.com"],
            ["User8", "user8@gmail.com"],
            ["User9", "user9@gmail.com"],
            ["User10", "user10@gmail.com"],
            ["User11", "user11@gmail.com"],
         ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
       $this->dropTable('tests');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180111_084830_test_table cannot be reverted.\n";

        return false;
    }
    */
}
