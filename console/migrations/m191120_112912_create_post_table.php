<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%post}}`.
 */
class m191120_112912_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'product_id' => $this->integer(11)->notNull(),
            'attribute_id' => $this->integer(11)->notNull(),
            'attribute_option_id' => $this->integer(11)->notNull(),
            'tenant_id' => $this->integer(11)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('post');
    }
}
