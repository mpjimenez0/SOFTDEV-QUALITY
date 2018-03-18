<?php

use yii\db\Migration;

/**
 * Handles the creation of table `request`.
 */
class m180313_085223_create_request_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('request', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('request');
    }
}
