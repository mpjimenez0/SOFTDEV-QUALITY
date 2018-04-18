<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Location;

/**
 * LocationSearch represents the model behind the search form of `frontend\models\Location`.
 */
class LocationSearch extends Location
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_municipal_id', 'region_id', 'barangay_id'], 'integer'],
            [['name', 'contact', 'email', 'type', 'capacity', 'status'], 'safe'],
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
        $query = Location::find();

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
            'city_municipal_id' => $this->city_municipal_id,
            'region_id' => $this->region_id,
            'barangay_id' => $this->barangay_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'capacity', $this->capacity])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
