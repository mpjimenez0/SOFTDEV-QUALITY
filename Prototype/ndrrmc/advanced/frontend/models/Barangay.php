<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "barangay".
 *
 * @property integer $id
 * @property string $Barangay_Name
 * @property integer $population
 * @property integer $region_id
 * @property integer $province_id
 * @property integer $city_municipal_id
 *
 * @property CityMunicipal $cityMunicipal
 * @property Province $province
 * @property Region $region
 * @property Location[] $locations
 * @property Supplier[] $suppliers
 * @property Vehicle[] $vehicles
 */
class Barangay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangay';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['population', 'region_id', 'province_id', 'city_municipal_id'], 'integer'],
            [['region_id', 'province_id', 'city_municipal_id'], 'required'],
            [['Barangay_Name'], 'string', 'max' => 45],
            [['city_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal_id' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
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
            'Barangay_Name' => 'Barangay  Name',
            'population' => 'Population',
            'region_id' => 'Region ID',
            'province_id' => 'Province ID',
            'city_municipal_id' => 'City Municipal ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipal()
    {
        return $this->hasOne(CityMunicipal::className(), ['id' => 'city_municipal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
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
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['barangay_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['barangay_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['barangay_id' => 'id']);
    }
}
