<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zcommit".
 *
 * @property integer $id
 * @property integer $zuowenid
 * @property integer $rank
 * @property string $commit
 * @property integer $create_user_id
 * @property string $create_time
 * @property integer $update_user_id
 * @property string $update_time
 */
class Zcommit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zcommit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['zuowenid', 'rank', 'commit', 'create_user_id', 'create_time', 'update_user_id', 'update_time'], 'required'],
            [['zuowenid', 'rank', 'create_user_id', 'update_user_id'], 'integer'],
            [['commit'], 'string'],
            [['create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'zuowenid' => 'Zuowenid',
            'rank' => 'Rank',
            'commit' => 'Commit',
            'create_user_id' => 'Create User ID',
            'create_time' => 'Create Time',
            'update_user_id' => 'Update User ID',
            'update_time' => 'Update Time',
        ];
    }
}
