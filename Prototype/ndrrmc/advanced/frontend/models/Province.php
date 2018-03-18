<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property integer $id
 * @property string $Province_Name
 * @property integer $population
 * @property integer $region_id
 *
 * @property Barangay[] $barangays
 * @property CityMunicipal[] $cityMunicipals
 * @property Location[] $locations
 * @property Region $region
 * @property Supplier[] $suppliers
 * @property User[] $users
 * @property Vehicle[] $vehicles
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['population', 'region_id'], 'integer'],
            [['region_id'], 'required'],
            [['Province_Name'], 'string', 'max' => 45],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Province_Name' => 'Province  Name',
            'population' => 'Population',
            'region_id' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipals()
    {
        return $this->hasMany(CityMunicipal::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['province_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['province_id' => 'id']);
    }
}
