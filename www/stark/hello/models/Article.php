<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%article}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property integer $status
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%article}}';
    }

    /**
     * @inheritdoc
     */
    public $image;

    public function rules()
    {
        return [
            [['image'], 'image',  'types' => 'png,jpg', 'skipOnEmpty' => false],
        ];
    }

}
