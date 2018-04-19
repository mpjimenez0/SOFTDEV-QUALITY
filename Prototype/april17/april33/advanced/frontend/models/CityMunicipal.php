<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "city_municipal".
 *
 * @property int $id
 * @property string $CityMunicipal
 * @property int $region_id
 *
 * @property Barangay[] $barangays
 * @property Region $region
 * @property Location[] $locations
 * @property Supplier[] $suppliers
 * @property Supply[] $supplies
 * @property User[] $users
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
            [['CityMunicipal', 'region_id'], 'required'],
            [['region_id'], 'integer'],
            [['CityMunicipal'], 'string', 'max' => 45],
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
            'CityMunicipal' => 'City/Municipal Name',
            'region_id' => 'Region ID',
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
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['city_municipal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['city_municipal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['city_municipal_id' => 'id']);
    }
}
