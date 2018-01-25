<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\DriverOfVehicle;

/**
 * DriverOfVehicleSearch represents the model behind the search form about `common\models\DriverOfVehicle`.
 */
class DriverOfVehicleSearch extends DriverOfVehicle
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vehicle_plate_number'], 'safe'],
            [['driver_id'], 'integer'],
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
        $query = DriverOfVehicle::find();

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
            'driver_id' => $this->driver_id,
        ]);

        $query->andFilterWhere(['like', 'vehicle_plate_number', $this->vehicle_plate_number]);

        return $dataProvider;
    }
}
