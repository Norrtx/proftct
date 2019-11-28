<?php

namespace common\models;

use Yii;
use \yii\web\UploadedFile;
use \yii\web\upload;
/**
 * This is the model class for table "easy_upload".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $photo
 * @property string $photos
 * @property int $user_id
 * @property int $created_at
 * @property int $updated_at
 */
class easyUpload extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'easy_upload';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photos'], 'string'],
            [['user_id', 'created_at', 'updated_at'], 'integer'],
            [['name', 'surname', ], 'string', 'max' => 255],
            [['photo'], 'file',
    
            'extensions' => 'png,jpg'
            ]
        ];
    }
    public function upload($model,$attribute)
    {
        $photo  = UploadedFile::getInstance($model, $attribute);
          $path = $this->getUploadPath();
        if ($this->validate() && $photo !== null) {
    
           // $fileName = md5($photo->baseName.time()) . '.' . $photo->extension;
            $fileName = $photo->baseName . '.' . $photo->extension;
            if($photo->saveAs($path.$fileName)){
              return $fileName;
            }
        }
        return $model->isNewRecord ? false : $model->getOldAttribute($attribute);
    }
    
    public function getUploadPath(){
     
      return Yii::getAlias('@webroot').'/web/uploads'.$this->upload.'/web/uploads';
    }
    
    public function getUploadUrl(){
      die();
      return Yii::getAlias('@web').'/'.$this->upload.'/';
    }
    
    public function getPhotoViewer(){
      return empty($this->photo) ? Yii::getAlias('@web').'/img/none.png' : $this->getUploadUrl().$this->photo;
    }
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'photo' => 'Photo',
            'photos' => 'Photos',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
