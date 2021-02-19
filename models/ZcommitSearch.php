<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zcommit;

/**
 * ZcommitSearch represents the model behind the search form about `app\models\Zcommit`.
 */
class ZcommitSearch extends Zcommit
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'zuowenid', 'rank', 'create_user_id', 'update_user_id'], 'integer'],
            [['commit', 'create_time', 'update_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Zcommit::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'zuowenid' => $this->zuowenid,
            'rank' => $this->rank,
            'create_user_id' => $this->create_user_id,
            'create_time' => $this->create_time,
            'update_user_id' => $this->update_user_id,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'commit', $this->commit]);

        return $dataProvider;
    }
}
