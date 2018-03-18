<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $id
 * @property string $Region_Name
 * @property integer $population
 *
 * @property Barangay[] $barangays
 * @property CityMunicipal[] $cityMunicipals
 * @property Location[] $locations
 * @property Province[] $provinces
 * @property Supplier[] $suppliers
 * @property Vehicle[] $vehicles
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
            [['population'], 'integer'],
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
            'population' => 'Population',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipals()
    {
        return $this->hasMany(CityMunicipal::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvinces()
    {
        return $this->hasMany(Province::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['region_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['region_id' => 'id']);
    }
}
