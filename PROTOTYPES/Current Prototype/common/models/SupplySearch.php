<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Supply;

/**
 * SupplySearch represents the model behind the search form about `common\models\Supply`.
 */
class SupplySearch extends Supply
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'quantity', 'remaining_supply', 'total_supply'], 'integer'],
            [['name', 'type', 'weight', 'date_delivered', 'date_received', 'expiration_date', 'comments', 'warehouse_name', 'barangay', 'city_municipal', 'province', 'region', 'supplier_name'], 'safe'],
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
        $query = Supply::find();

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
            'code' => $this->code,
            'quantity' => $this->quantity,
            'date_delivered' => $this->date_delivered,
            'date_received' => $this->date_received,
            'expiration_date' => $this->expiration_date,
            'remaining_supply' => $this->remaining_supply,
            'total_supply' => $this->total_supply,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'warehouse_name', $this->warehouse_name])
            ->andFilterWhere(['like', 'barangay', $this->barangay])
            ->andFilterWhere(['like', 'city_municipal', $this->city_municipal])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'supplier_name', $this->supplier_name]);

        return $dataProvider;
    }
}
