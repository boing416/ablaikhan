<?php

namespace backend\modules\settings\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\settings\models\Exchangeprogram;

/**
 * SearchExchangeprogram represents the model behind the search form about `backend\modules\settings\models\Exchangeprogram`.
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
            [['country', 'specialty_name', 'period', 'conditions', 'date'], 'safe'],
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

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'specialty_name', $this->specialty_name])
            ->andFilterWhere(['like', 'period', $this->period])
            ->andFilterWhere(['like', 'conditions', $this->conditions]);

        return $dataProvider;
    }
}
