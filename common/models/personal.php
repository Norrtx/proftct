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
 * @property string $pro_img
 * @property string $latitude
 * @property string $longitude
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
            [['latitude', 'longitude'], 'number'],
            [['name', 'mail', 'discription', 'link', 'city', 'state', 'pro_img'], 'string', 'max' => 255],
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
            'pro_img' => 'Pro Img',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
