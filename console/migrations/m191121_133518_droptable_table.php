<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%skill}}`.
 */
class m191121_133518_droptable_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->dropTable('edugation');
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        // $this->dropTable('skill');
        // $this->dropTable('edugation');
    }
}
