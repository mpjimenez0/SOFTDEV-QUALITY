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
            [['id', 'quantity_needed', 'total_quantity', 'total_request', 'user', 'supply_code', 'volunteer'], 'integer'],
            [['date_needed', 'date_requested', 'reason', 'receipient', 'beneficiary', 'priority', 'status', 'vehicle_plate_number', 'vehicle_type', 'supply_type'], 'safe'],
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
            'date_needed' => $this->date_needed,
            'date_requested' => $this->date_requested,
            'quantity_needed' => $this->quantity_needed,
            'total_quantity' => $this->total_quantity,
            'total_request' => $this->total_request,
            'user' => $this->user,
            'supply_code' => $this->supply_code,
            'volunteer' => $this->volunteer,
            'supply_type' => $this->supply_type,
            'vehicle_type' => $this->vehicle_type,
        ]);

        $query->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'receipient', $this->receipient])
            ->andFilterWhere(['like', 'beneficiary', $this->beneficiary])
            ->andFilterWhere(['like', 'priority', $this->priority])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'vehicle_plate_number', $this->vehicle_plate_number]);

        return $dataProvider;
    }
}
