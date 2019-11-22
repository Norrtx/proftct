<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property string $discription
 * @property string $link
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class personal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['zip', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'mail', 'discription', 'link', 'city', 'state'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mail' => 'Mail',
            'discription' => 'Discription',
            'link' => 'Link',
            'city' => 'City',
            'state' => 'State',
            'zip' => 'Zip',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
