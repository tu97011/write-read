<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "action".
 *
 * @property integer $id
 * @property string $title
 * @property resource $plan
 * @property string $content
 * @property resource $headimg
 * @property string $add1
 * @property string $add2
 */
class Action extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'action';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'plan'], 'required'],
            [['plan', 'content', 'headimg'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['add1', 'add2'], 'string', 'max' => 120],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'plan' => '计划',
            'content' => '内容',
            'headimg' => '主题图片',
            'add1' => '附加内容1',
            'add2' => '附加内容2',
        ];
    }
}
