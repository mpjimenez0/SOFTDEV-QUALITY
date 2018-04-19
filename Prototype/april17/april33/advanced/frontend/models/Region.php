<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string $Region_Name
 *
 * @property CityMunicipal[] $cityMunicipals
 * @property User[] $users
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Region_Name'], 'required'],
            [['Region_Name'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Region_Name' => 'Region  Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipals()
    {
        return $this->hasMany(CityMunicipal::className(), ['Region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['Region_id' => 'id']);
    }
}
