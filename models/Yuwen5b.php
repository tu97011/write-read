<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "yuwen5b".
 *
 * @property integer $id
 * @property string $lesson
 * @property string $kewen
 * @property string $readmap
 * @property string $action
 */
class Yuwen5b extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'yuwen5b';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson', 'readmap', 'daodu'], 'required'],
            [['readmap', 'daodu','jilei','yingyong','sikao'], 'string'],
            [['lesson'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lesson' => '',
            'readmap' => '',
            'daodu' => '',
			'jilei'=>'',
			'yingyong'=>'',
			'sikao'=>'',
        ];
    }
}
