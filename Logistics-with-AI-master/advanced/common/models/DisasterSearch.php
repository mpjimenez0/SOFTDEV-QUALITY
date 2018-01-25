<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Disaster;

/**
 * DisasterSearch represents the model behind the search form about `common\models\Disaster`.
 */
class DisasterSearch extends Disaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'disaster_type', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['month', 'day', 'year', 'address_barangay_id'], 'safe'],
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
        $query = Disaster::find();

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
            'disaster_type' => $this->disaster_type,
            'address_city_municipal_id' => $this->address_city_municipal_id,
            'address_province_id' => $this->address_province_id,
            'address_region_id' => $this->address_region_id,
        ]);

        $query->andFilterWhere(['like', 'month', $this->month])
            ->andFilterWhere(['like', 'day', $this->day])
            ->andFilterWhere(['like', 'year', $this->year])
            ->andFilterWhere(['like', 'address_barangay_id', $this->address_barangay_id]);

        return $dataProvider;
    }
}
