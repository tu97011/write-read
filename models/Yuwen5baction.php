<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yuwen5baction".
 *
 * @property integer $id
 * @property integer $yuwen5bid
 * @property string $title
 * @property string $content
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 * @property integer $class
 */
class Yuwen5baction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yuwen5baction';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'create_user_id', 'create_time', 'update_user_id', 'update_time'], 'required'],
            [['yuwen5bid', 'create_user_id', 'update_user_id', 'class'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'yuwen5bid' => 'Yuwen5bid',
            'title' => '主题',
            'content' => '内容',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'update_user_id' => 'Update User ID',
            'update_time' => 'Update Time',
            'class' => '类别',
        ];
    }
}
