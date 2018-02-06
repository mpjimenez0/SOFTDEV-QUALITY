<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Volunteer;

/**
 * VolunteerSearch represents the model behind the search form about `common\models\Volunteer`.
 */
class VolunteerSearch extends Volunteer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'total_volunteer'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'organization', 'birth_year', 'type', 'contact', 'email', 'date_registered', 'occupation', 'available_time', 'available_day', 'barangay', 'city_municipal', 'province', 'region'], 'safe'],
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
        $query = Volunteer::find();

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
            'birth_year' => $this->birth_year,
            'date_registered' => $this->date_registered,
            'available_time' => $this->available_start_time,
            'total_volunteer' => $this->total_volunteer,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'organization', $this->organization])
            //->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'contact', $this->contact])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'occupation', $this->occupation])
            ->andFilterWhere(['like', 'available_day', $this->available_day])
            ->andFilterWhere(['like', 'barangay', $this->barangay])
            ->andFilterWhere(['like', 'city_municipal', $this->city_municipal])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'region', $this->region]);

        return $dataProvider;
    }
}
