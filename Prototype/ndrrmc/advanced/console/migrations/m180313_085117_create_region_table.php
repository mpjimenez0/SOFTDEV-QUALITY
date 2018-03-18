<?php

use yii\db\Migration;

/**
 * Handles the creation of table `region`.
 */
class m180313_085117_create_region_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('region', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('region');
    }
}
