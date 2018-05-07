<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "investors".
 *
 * @property int $id
 * @property string $name
 * @property string $l_name
 * @property string $s_name
 * @property string $email
 * @property int $phone
 * @property string $disc
 * @property string $photo
 * @property int $user_id
 */
class Investors extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'investors';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'l_name', 's_name', 'email', 'phone', 'disc', 'user_id'], 'required'],
            [['phone', 'user_id'], 'integer'],
            [['name', 'l_name', 's_name'], 'string', 'max' => 30],
            [['email'], 'string', 'max' => 100],
            [['disc'], 'string', 'max' => 255],
             [['photo'], 'file', 'skipOnEmpty' => false],
        ];
    }
    public function upload()
    {
        if ($this->validate()) {
            //echo 'sssssssssssssssssss'.@backend.'/uploads/' . $this->photo->baseName . '.' . $this->photo->extension;
            $this->photo->saveAs(Yii::$app->basePath.'/uploads/' . $this->photo->baseName . '.' . $this->photo->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'name' => Yii::t('backend', 'Name'),
            'l_name' => Yii::t('backend', 'L Name'),
            's_name' => Yii::t('backend', 'S Name'),
            'email' => Yii::t('backend', 'Email'),
            'phone' => Yii::t('backend', 'Phone'),
            'disc' => Yii::t('backend', 'Disc'),
            'photo' => Yii::t('backend', 'Photo'),
            'user_id' => Yii::t('backend', 'User ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return InvestorsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new InvestorsQuery(get_called_class());
    }
}
