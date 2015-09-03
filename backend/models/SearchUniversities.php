<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Universities;

/**
 * SearchUniversities represents the model behind the search form about `backend\models\Universities`.
 */
class SearchUniversities extends Universities
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university_id'], 'integer'],
            [['university_name', 'university_country'], 'safe'],
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
        $query = Universities::find();

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
            'university_id' => $this->university_id,
        ]);

        $query->andFilterWhere(['like', 'university_name', $this->university_name])
            ->andFilterWhere(['like', 'university_country', $this->university_country]);

        return $dataProvider;
    }
}
