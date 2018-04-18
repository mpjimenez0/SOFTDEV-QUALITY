<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Vehicle;

/**
 * VehicleSearch represents the model behind the search form of `frontend\models\Vehicle`.
 */
class VehicleSearch extends Vehicle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'region_id', 'city_municipal_id', 'barangay_id'], 'integer'],
            [['name', 'plate_number', 'type', 'type_star', 'classification', 'status', 'tracking_number'], 'safe'],
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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'region_id' => $this->region_id,
            'city_municipal_id' => $this->city_municipal_id,
            'barangay_id' => $this->barangay_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'plate_number', $this->plate_number])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'type_star', $this->type_star])
            ->andFilterWhere(['like', 'classification', $this->classification])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'tracking_number', $this->tracking_number]);

        return $dataProvider;
    }
}
