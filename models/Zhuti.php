<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zhuti".
 *
 * @property integer $id
 * @property integer $class
 * @property string $title
 * @property string $content
 * @property string $zhidao
 * @property string $sucai
 */
class Zhuti extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zhuti';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class', 'title', 'content','create_user_id', 'update_user_id'], 'required'],
            [['class','create_user_id', 'update_user_id'], 'integer'],
            [['content', 'zhidao', 'sucai'], 'string'],
            [['title'], 'string', 'max' => 200],
			[['create_time', 'update_time','date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class' => 'Class',
            'title' => 'Title',
            'content' => 'Content',
            'zhidao' => 'Zhidao',
            'sucai' => 'Sucai',
        ];
    }
}
