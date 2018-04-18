<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "barangay".
 *
 * @property int $id
 * @property string $Barangay_Name
 * @property int $city_municipal_id
 *
 * @property CityMunicipal $cityMunicipal
 * @property Location[] $locations
 * @property Supplier[] $suppliers
 * @property Supply[] $supplies
 * @property User[] $users
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
            [['Barangay_Name', 'city_municipal_id'], 'required'],
            [['city_municipal_id'], 'integer'],
            [['Barangay_Name'], 'string', 'max' => 45],
            [['city_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal_id' => 'id']],
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
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['barangay_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['barangay_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['barangay_id' => 'id']);
    }
}
