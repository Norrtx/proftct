<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Handles the creation of table `{{%personal}}`.
 */
class m191121_065107_cerate_personal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('personal', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'mail' => $this->string(),
            'discription' => $this->string(),
            'link' => $this->string(),
            'city' => $this->string(),
            'state' => $this->string(),
            'zip' => $this->integer(),
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
        $this->dropTable('personal');
    }
}
