<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "education".
 *
 * @property int $id
 * @property string $name
 * @property string $major
 * @property string $gpa
 * @property int $date
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class education extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gpa'], 'number'],
            [['date', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'major'], 'string', 'max' => 255],
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
            'major' => 'Major',
            'gpa' => 'Gpa',
            'date' => 'Date',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
