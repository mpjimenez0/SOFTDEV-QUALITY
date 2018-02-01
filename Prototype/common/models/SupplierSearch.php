<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Supplier;

/**
 * SupplierSearch represents the model behind the search form about `common\models\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'acronym', 'contact', 'email', 'contact_person', 'website', 'barangay', 'city_municipal', 'province', 'region'], 'safe'],
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
        $query = Supplier::find();

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
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'acronym', $this->acronym])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'contact_person', $this->contact_person])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'barangay', $this->barangay])
            ->andFilterWhere(['like', 'city_municipal', $this->city_municipal])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'region', $this->region]);

        return $dataProvider;
    }
}
