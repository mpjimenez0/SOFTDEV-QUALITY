<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Personal;

/**
 * PersonalSearch represents the model behind the search form about `common\models\Personal`.
 */
class PersonalSearch extends Personal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'birth_day', 'birth_year', 'nationality', 'contact_number', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['first', 'middle', 'last', 'birth_month', 'sex', 'address_barangay_id'], 'safe'],
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
        $query = Personal::find();

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
            'birth_day' => $this->birth_day,
            'birth_year' => $this->birth_year,
            'nationality' => $this->nationality,
            'contact_number' => $this->contact_number,
            'address_city_municipal_id' => $this->address_city_municipal_id,
            'address_province_id' => $this->address_province_id,
            'address_region_id' => $this->address_region_id,
        ]);

        $query->andFilterWhere(['like', 'first', $this->first])
            ->andFilterWhere(['like', 'middle', $this->middle])
            ->andFilterWhere(['like', 'last', $this->last])
            ->andFilterWhere(['like', 'birth_month', $this->birth_month])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'address_barangay_id', $this->address_barangay_id]);

        return $dataProvider;
    }
}
