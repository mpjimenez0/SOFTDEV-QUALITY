<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "city_municipal".
 *
 * @property integer $id
 * @property string $CityMunicipal
 * @property integer $population
 * @property integer $region_id
 * @property integer $province_id
 *
 * @property Barangay[] $barangays
 * @property Province $province
 * @property Region $region
 * @property Location[] $locations
 * @property Supplier[] $suppliers
 * @property Vehicle[] $vehicles
 */
class CityMunicipal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city_municipal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['population', 'region_id', 'province_id'], 'integer'],
            [['region_id', 'province_id'], 'required'],
            [['CityMunicipal'], 'string', 'max' => 45],
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
            'CityMunicipal' => 'City Municipal',
            'population' => 'Population',
            'region_id' => 'Region ID',
            'province_id' => 'Province ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['city_municipal_id' => 'id']);
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
        return $this->hasMany(Location::className(), ['city_municipal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['city_municipal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['city_municipal_id' => 'id']);
    }
}
