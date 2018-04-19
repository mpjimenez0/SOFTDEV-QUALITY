<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Resource;

/**
 * ResourceSearch represents the model behind the search form of `frontend\models\Resource`.
 */
class ResourceSearch extends Resource
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'supplier_id', 'location_id'], 'integer'],
            [['name', 'supply_type', 'quantity', 'date_delivered', 'date_received', 'details', 'expiration_date', 'remaining_supply', 'supply_category'], 'safe'],
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
        $query = Resource::find();

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
            'date_delivered' => $this->date_delivered,
            'date_received' => $this->date_received,
            'supplier_id' => $this->supplier_id,
            'location_id' => $this->location_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'supply_type', $this->supply_type])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'expiration_date', $this->expiration_date])
            ->andFilterWhere(['like', 'remaining_supply', $this->remaining_supply])
            ->andFilterWhere(['like', 'supply_category', $this->supply_category]);

        return $dataProvider;
    }
}
