<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%post}}`.
 */
class m191121_065450_cerate_education_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('education', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'major' =>$this->string(),
            'gpa'=>$this->decimal(10,2),
            'date'=>$this->integer(),
            'user_id'=>$this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
         
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('education');
    }
}
