<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articlecommit".
 *
 * @property integer $id
 * @property integer $articleid
 * @property string $content
 * @property string $username
 */
class Articlecommit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articlecommit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articleid', 'content', 'username'], 'required'],
            [['articleid'], 'integer'],
            [['content'], 'string'],
            [['username'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'articleid' => 'Articleid',
            'content' => 'Content',
            'username' => 'Username',
        ];
    }
}
