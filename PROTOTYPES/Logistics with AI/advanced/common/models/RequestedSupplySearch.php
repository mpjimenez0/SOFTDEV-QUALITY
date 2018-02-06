<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\RequestedSupply;

/**
 * RequestedSupplySearch represents the model behind the search form about `common\models\RequestedSupply`.
 */
class RequestedSupplySearch extends RequestedSupply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_id', 'request_user_info_user_id', 'supply_detail_info_supplier', 'supply_detail_info_supply_code'], 'integer'],
            [['quantity', 'start_date_expected', 'start_date_actual', 'end_date_expected', 'end_date_actual', 'vehicle_plate_number'], 'safe'],
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
        $query = RequestedSupply::find();

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
            'request_id' => $this->request_id,
            'request_user_info_user_id' => $this->request_user_info_user_id,
            'supply_detail_info_supplier' => $this->supply_detail_info_supplier,
            'supply_detail_info_supply_code' => $this->supply_detail_info_supply_code,
        ]);

        $query->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'start_date_expected', $this->start_date_expected])
            ->andFilterWhere(['like', 'start_date_actual', $this->start_date_actual])
            ->andFilterWhere(['like', 'end_date_expected', $this->end_date_expected])
            ->andFilterWhere(['like', 'end_date_actual', $this->end_date_actual])
            ->andFilterWhere(['like', 'vehicle_plate_number', $this->vehicle_plate_number]);

        return $dataProvider;
    }
}
