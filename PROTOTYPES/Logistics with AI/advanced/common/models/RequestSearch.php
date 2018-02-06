<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Request;

/**
 * RequestSearch represents the model behind the search form about `common\models\Request`.
 */
class RequestSearch extends Request
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tracking_number', 'delivery_status', 'user_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['date_requested', 'date_needed', 'quantity', 'description', 'address_barangay_id'], 'safe'],
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
        $query = Request::find();

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
            'tracking_number' => $this->tracking_number,
            'delivery_status' => $this->delivery_status,
            'user_id' => $this->user_id,
            'address_city_municipal_id' => $this->address_city_municipal_id,
            'address_province_id' => $this->address_province_id,
            'address_region_id' => $this->address_region_id,
        ]);

        $query->andFilterWhere(['like', 'date_requested', $this->date_requested])
            ->andFilterWhere(['like', 'date_needed', $this->date_needed])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'address_barangay_id', $this->address_barangay_id]);

        return $dataProvider;
    }
}
