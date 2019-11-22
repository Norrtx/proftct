<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "skill".
 *
 * @property int $id
 * @property string $name
 * @property int $score
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class skill extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'skill';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['score', 'user_id', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'score' => 'Score',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
