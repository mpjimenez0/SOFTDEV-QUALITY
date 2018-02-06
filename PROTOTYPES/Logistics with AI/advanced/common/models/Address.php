<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property string $barangay_id
 * @property integer $city_municipal_id
 * @property integer $province_id
 * @property integer $region_id
 * @property string $street_address
 * @property string $street_address_2
 *
 * @property Barangay $barangay
 * @property CityMunicipal $cityMunicipal
 * @property Province $province
 * @property Region $region
 * @property Disaster[] $disasters
 * @property Personal[] $personals
 * @property Request[] $requests
 * @property SupplyDetailInfo[] $supplyDetailInfos
 * @property Vehicle[] $vehicles
 * @property Warehouse[] $warehouses
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['barangay_id', 'city_municipal_id', 'province_id', 'region_id'], 'required'],
            [['city_municipal_id', 'province_id', 'region_id'], 'integer'],
            [['barangay_id'], 'string', 'max' => 10],
            [['street_address', 'street_address_2'], 'string', 'max' => 255],
            [['barangay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay_id' => 'id']],
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
            'barangay_id' => 'Barangay ID',
            'city_municipal_id' => 'City Municipal ID',
            'province_id' => 'Province ID',
            'region_id' => 'Region ID',
            'street_address' => 'Street Address',
            'street_address_2' => 'Street Address 2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay()
    {
        return $this->hasOne(Barangay::className(), ['id' => 'barangay_id']);
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
    public function getDisasters()
    {
        return $this->hasMany(Disaster::className(), ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonals()
    {
        return $this->hasMany(Personal::className(), ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfos()
    {
        return $this->hasMany(SupplyDetailInfo::className(), ['address_barangay' => 'barangay_id', 'address_city_municipal' => 'city_municipal_id', 'address_province' => 'province_id', 'address_region' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(Warehouse::className(), ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']);
    }
}
