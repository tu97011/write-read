<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "math4a".
 *
 * @property integer $id
 * @property string $text
 * @property string $a
 * @property string $b
 * @property string $c
 * @property integer $answernum
 */
class Math4a extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'math4a';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text', 'a', 'b', 'c'], 'required'],
            [['text'], 'string'],
            [['answernum'], 'integer'],
            [['a', 'b', 'c'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'text' => 'Text',
            'a' => 'A',
            'b' => 'B',
            'c' => 'C',
            'answernum' => 'Answernum',
        ];
    }
}
