<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Barangay;

/**
 * BarangaySearch represents the model behind the search form of `frontend\models\Barangay`.
 */
class BarangaySearch extends Barangay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_municipal_id'], 'integer'],
            [['Barangay_Name'], 'safe'],
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
        $query = Barangay::find();

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
            'city_municipal_id' => $this->city_municipal_id,
        ]);

        $query->andFilterWhere(['like', 'Barangay_Name', $this->Barangay_Name]);

        return $dataProvider;
    }
}
