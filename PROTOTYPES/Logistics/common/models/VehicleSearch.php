<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Vehicle;

/**
 * VehicleSearch represents the model behind the search form about `common\models\Vehicle`.
 */
class VehicleSearch extends Vehicle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['plate_number', 'name', 'type', 'type_star', 'classification', 'width', 'length', 'height', 'fuel_capacity', 'max_distance_fuel', 'capacity', 'owner', 'rent_owned', 'speed', 'comment', 'barangay', 'city_municipal', 'province', 'region'], 'safe'],
            [['quantity', 'remaining_vehicle'], 'integer'],
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
        $query = Vehicle::find();

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
            'quantity' => $this->quantity,
            'remaining_vehicle' => $this->remaining_vehicle,
        ]);

        $query->andFilterWhere(['like', 'plate_number', $this->plate_number])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'type_star', $this->type_star])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'fuel_capacity', $this->fuel_capacity])
            ->andFilterWhere(['like', 'max_distance_fuel', $this->max_distance_fuel])
            ->andFilterWhere(['like', 'capacity', $this->capacity])
            ->andFilterWhere(['like', 'owner', $this->owner])
            ->andFilterWhere(['like', 'rent_owned', $this->rent_owned])
            ->andFilterWhere(['like', 'speed', $this->speed])
            ->andFilterWhere(['like', 'comment', $this->comment])
            ->andFilterWhere(['like', 'barangay', $this->barangay])
            ->andFilterWhere(['like', 'city_municipal', $this->city_municipal])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'region', $this->region]);

        return $dataProvider;
    }
}
