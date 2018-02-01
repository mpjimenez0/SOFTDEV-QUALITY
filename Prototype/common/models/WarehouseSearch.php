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
            [['name', 'status', 'contact', 'email', 'area', 'year_established', 'private_public', 'comments', 'created_at', 'updated_at', 'latitude', 'longtitude'], 'safe'],
            [['capacity', 'room', 'total_warehouse', 'user'], 'integer'],
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
            'year_established' => $this->year_established,
            'capacity' => $this->capacity,
            'room' => $this->room,
            'total_warehouse' => $this->total_warehouse,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => $this->user,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'private_public', $this->private_public])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
