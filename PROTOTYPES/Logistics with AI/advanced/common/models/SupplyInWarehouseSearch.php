<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SupplyInWarehouse;

/**
 * SupplyInWarehouseSearch represents the model behind the search form about `common\models\SupplyInWarehouse`.
 */
class SupplyInWarehouseSearch extends SupplyInWarehouse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supply_detail_info_supplier_id', 'supply_detail_info_supply_code', 'warehouse_detail_info_warehouse_id', 'warehouse_detail_info_contact_number_id', 'quantity'], 'integer'],
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
        $query = SupplyInWarehouse::find();

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
            'supply_detail_info_supplier_id' => $this->supply_detail_info_supplier_id,
            'supply_detail_info_supply_code' => $this->supply_detail_info_supply_code,
            'warehouse_detail_info_warehouse_id' => $this->warehouse_detail_info_warehouse_id,
            'warehouse_detail_info_contact_number_id' => $this->warehouse_detail_info_contact_number_id,
            'quantity' => $this->quantity,
        ]);

        return $dataProvider;
    }
}
