<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Investors;

/**
 * InvestorsSearch represents the model behind the search form of `backend\models\Investors`.
 */
class InvestorsSearch extends Investors
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'phone', 'user_id'], 'integer'],
            [['name', 'l_name', 's_name', 'email', 'disc', 'photo'], 'safe'],
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
        $query = Investors::find();

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
            'phone' => $this->phone,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'l_name', $this->l_name])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'disc', $this->disc])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
