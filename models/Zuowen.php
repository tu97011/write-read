<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zuowen".
 *
 * @property integer $id
 * @property integer $zhuti_id
 * @property integer $class
 * @property string $title
 * @property string $content
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 */
class Zuowen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zuowen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zhuti_id', 'class', 'title', 'content', 'create_user_id', 'create_time', 'update_user_id', 'update_time'], 'required'],
            [['zhuti_id', 'class', 'create_user_id', 'update_user_id'], 'integer'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zhuti_id' => 'Zhuti ID',
            'class' => '类型',
            'title' => '标题',
            'content' => '具体内容',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'update_user_id' => 'Update User ID',
            'update_time' => 'Update Time',
        ];
    }
}
