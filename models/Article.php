<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $class
 * @property string $title
 * @property string $content
 * @property string $excise
 * @property string $daodu
 * @property integer $level
 * @property string $word
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class', 'title', 'content','create_user_id', 'update_user_id'], 'required'],
            [['class', 'level','create_user_id', 'update_user_id'], 'integer'],
            [['content', 'excise', 'daodu', 'word'], 'string'],
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
            'class' => '分类',
            'title' => '标题',
            'content' => '文章内容',
            'excise' => '阅读练习',
            'daodu' => '导读',
            'level' => '等级',
            'word' => '词语表',
        ];
    }
}
