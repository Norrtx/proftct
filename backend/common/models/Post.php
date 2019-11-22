<?php

namespace app\common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $product_id
 * @property int $attribute_id
 * @property int $attribute_option_id
 * @property int $tenant_id
 * @property int $status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'attribute_id', 'attribute_option_id', 'tenant_id'], 'required'],
            [['product_id', 'attribute_id', 'attribute_option_id', 'tenant_id', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'attribute_id' => 'Attribute ID',
            'attribute_option_id' => 'Attribute Option ID',
            'tenant_id' => 'Tenant ID',
            'status' => 'Status',
        ];
    }
}
