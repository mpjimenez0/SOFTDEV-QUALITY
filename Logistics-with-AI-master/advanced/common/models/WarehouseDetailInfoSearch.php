<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\WarehouseDetailInfo;

/**
 * WarehouseDetailInfoSearch represents the model behind the search form about `common\models\WarehouseDetailInfo`.
 */
class WarehouseDetailInfoSearch extends WarehouseDetailInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'contact_number'], 'integer'],
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
        $query = WarehouseDetailInfo::find();

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
            'warehouse_id' => $this->warehouse_id,
            'contact_number' => $this->contact_number,
        ]);

        return $dataProvider;
    }
}
