<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Specialities;

/**
 * SearchSpecialities represents the model behind the search form about `backend\models\Specialities`.
 */
class SearchSpecialities extends Specialities
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['specialty_id'], 'integer'],
            [['specialty_name'], 'safe'],
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
        $query = Specialities::find();

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
            'specialty_id' => $this->specialty_id,
        ]);

        $query->andFilterWhere(['like', 'specialty_name', $this->specialty_name]);

        return $dataProvider;
    }
}
