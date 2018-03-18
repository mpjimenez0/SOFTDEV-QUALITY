<?php

use yii\db\Migration;

class m130524_201442_init extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),

            'first_name' => $this->string()->notNull()->defaultValue(45),
            'middle_name' => $this->string()->notnull->defaultValue(45),
            'last_name' => $this->string()->notNull()->defaultValue(50),

            'contact' => $this->string()->notNull()->defaultValue(11),
            'birthdate' => $this->date()->notNull(),
            'type' => $this->string()->notNull(),
            'external_type' => $this->string()->notNull(),
            'region_id' => $this->string()->notNull(),
            'city_municipal_id' => $this->string()->notNull(),
            'barangay_id' => $this->string()->notNull(),


        ], $tableOptions);

        $this->addForeignKey(
            'fk-user-user_id',
        )
    }

    public function down()
    {
        $this->dropTable('{{%user}}');
    }
}
