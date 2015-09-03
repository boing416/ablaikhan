<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Exchangeprogram;

/**
 * SearchExchangeprogram represents the model behind the search form about `backend\models\Exchangeprogram`.
 */
class SearchExchangeprogram extends Exchangeprogram
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['exchange_program_id', 'university_id', 'specialty_id', 'language_id'], 'integer'],
            [['university_name', 'language_name', 'country', 'specialty_name', 'period', 'conditions', 'date', 'images'], 'safe'],
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
        $query = Exchangeprogram::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'exchange_program_id' => $this->exchange_program_id,
            'university_id' => $this->university_id,
            'specialty_id' => $this->specialty_id,
            'language_id' => $this->language_id,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'university_name', $this->university_name])
            ->andFilterWhere(['like', 'language_name', $this->language_name])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'specialty_name', $this->specialty_name])
            ->andFilterWhere(['like', 'period', $this->period])
            ->andFilterWhere(['like', 'conditions', $this->conditions])
            ->andFilterWhere(['like', 'images', $this->images]);

        return $dataProvider;
    }
}
