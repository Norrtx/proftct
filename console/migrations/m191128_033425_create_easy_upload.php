<?php

use yii\db\Migration;

/**
 * Class m191128_033425_create_easy_upload
 */
class m191128_033425_create_easy_upload extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('easy_upload', [
            'id' => $this->primaryKey()->unsigned()->notNull(),
            'name' =>$this->string(),
            'surname' =>$this->string() ,
            'photo'=>$this->string() ,
            'photos'=>$this->text(),
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
        $this->dropTable('easy_upload');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191128_033425_create_easy_upload cannot be reverted.\n";

        return false;
    }
    */
}
