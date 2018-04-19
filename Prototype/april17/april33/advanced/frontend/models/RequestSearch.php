<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Request;

/**
 * RequestSearch represents the model behind the search form of `frontend\models\Request`.
 */
class RequestSearch extends Request
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'resource_id', 'vehicle_id'], 'integer'],
            [['date_needed', 'date_requested', 'reason', 'quantity_needed', 'priority', 'receipient', 'beneficiary', 'status'], 'safe'],
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
            'user_id' => $this->user_id,
            'resource_id' => $this->resource_id,
            'vehicle_id' => $this->vehicle_id,
        ]);

        $query->andFilterWhere(['like', 'date_needed', $this->date_needed])
            ->andFilterWhere(['like', 'date_requested', $this->date_requested])
            ->andFilterWhere(['like', 'reason', $this->reason])
            ->andFilterWhere(['like', 'quantity_needed', $this->quantity_needed])
            ->andFilterWhere(['like', 'priority', $this->priority])
            ->andFilterWhere(['like', 'receipient', $this->receipient])
            ->andFilterWhere(['like', 'beneficiary', $this->beneficiary])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
