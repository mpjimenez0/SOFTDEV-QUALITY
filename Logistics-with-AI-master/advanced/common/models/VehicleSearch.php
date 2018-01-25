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
            [['plate_number', 'model', 'timestamp', 'available_day', 'available_hour_start', 'available_hour_end', 'address_barangay_id'], 'safe'],
            [['is_lease', 'vehicle_category', 'vehicle_type', 'vehicle_size_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
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
            'is_lease' => $this->is_lease,
            'vehicle_category' => $this->vehicle_category,
            'vehicle_type' => $this->vehicle_type,
            'vehicle_size_id' => $this->vehicle_size_id,
            'address_city_municipal_id' => $this->address_city_municipal_id,
            'address_province_id' => $this->address_province_id,
            'address_region_id' => $this->address_region_id,
        ]);

        $query->andFilterWhere(['like', 'plate_number', $this->plate_number])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'timestamp', $this->timestamp])
            ->andFilterWhere(['like', 'available_day', $this->available_day])
            ->andFilterWhere(['like', 'available_hour_start', $this->available_hour_start])
            ->andFilterWhere(['like', 'available_hour_end', $this->available_hour_end])
            ->andFilterWhere(['like', 'address_barangay_id', $this->address_barangay_id]);

        return $dataProvider;
    }
}
