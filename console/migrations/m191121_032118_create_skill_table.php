<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skill}}`.
 */
class m191121_032118_create_skill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        // $this->createTable('skill', [
        //     'id' => $this->primaryKey()->unsigned()->notNull(),
        //     'product_id' => $this->integer(11)->notNull(),
        //     'attribute_id' => $this->integer(11)->notNull(),
        //     'attribute_option_id' => $this->integer(11)->notNull(),
        //     'tenant_id' => $this->integer(11)->notNull(),
        //     'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
        // ]);
        $this->dropTable('skill');

    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('skill');
    }
}
