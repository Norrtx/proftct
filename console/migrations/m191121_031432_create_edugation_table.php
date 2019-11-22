<?php
use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `{{%edugation}}`.
 */
class m191121_031432_create_edugation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('edugation', [
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
        $this->dropTable('edugation');
    }
}

