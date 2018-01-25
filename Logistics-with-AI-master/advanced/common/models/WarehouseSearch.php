<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Warehouse;

/**
 * WarehouseSearch represents the model behind the search form about `common\models\Warehouse`.
 */
class WarehouseSearch extends Warehouse
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'year_established', 'warehouse_type_id', 'warehouse_category_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['name', 'contact_person_name', 'description', 'area', 'timestamp', 'open_hours', 'close_hours', 'open_day', 'address_barangay_id'], 'safe'],
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
        $query = Warehouse::find();

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
            'year_established' => $this->year_established,
            'warehouse_type_id' => $this->warehouse_type_id,
            'warehouse_category_id' => $this->warehouse_category_id,
            'address_city_municipal_id' => $this->address_city_municipal_id,
            'address_province_id' => $this->address_province_id,
            'address_region_id' => $this->address_region_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'contact_person_name', $this->contact_person_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'timestamp', $this->timestamp])
            ->andFilterWhere(['like', 'open_hours', $this->open_hours])
            ->andFilterWhere(['like', 'close_hours', $this->close_hours])
            ->andFilterWhere(['like', 'open_day', $this->open_day])
            ->andFilterWhere(['like', 'address_barangay_id', $this->address_barangay_id]);

        return $dataProvider;
    }
}
