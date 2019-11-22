<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%post}}`.
 */
class m191121_065509_cerate_skill_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('skill', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'score'=>$this->integer(),
            'user_id'=>$this->integer(),
            'created_at' => $this->integer(11),
            'updated_at' => $this->integer(11),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('skill');
    }
}
