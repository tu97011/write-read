<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Action;


/**
 * ActionSearch represents the model behind the search form about `app\models\action`.
 牛逼的是，引用的类名首字母小写本地可以识别，网络端不识别。估计是本地服务器和网络服务器的php设置有一定差别。
 */
class ActionSearch extends Action
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'plan', 'content', 'headimg', 'add1', 'add2'], 'safe'],
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
        $query = action::find();

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
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'plan', $this->plan])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'headimg', $this->headimg])
            ->andFilterWhere(['like', 'add1', $this->add1])
            ->andFilterWhere(['like', 'add2', $this->add2]);

        return $dataProvider;
    }
}
