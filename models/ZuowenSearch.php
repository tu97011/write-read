<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zuowen;

/**
 * ZuowenSearch represents the model behind the search form about `app\models\Zuowen`.
 */
class ZuowenSearch extends Zuowen
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'zhuti_id', 'class', 'create_user_id', 'update_user_id'], 'integer'],
            [['title', 'content', 'create_time', 'update_time'], 'safe'],
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
        $query = Zuowen::find();

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
            'zhuti_id' => $this->zhuti_id,
            'class' => $this->class,
            'create_user_id' => $this->create_user_id,
            'create_time' => $this->create_time,
            'update_user_id' => $this->update_user_id,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
