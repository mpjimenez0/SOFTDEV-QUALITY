<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barangay".
 *
 * @property string $name
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 * @property string $updated_at
 * @property string $created_at
 *
 * @property CityMunicipal $cityMunicipal
 * @property DisasterSite[] $disasterSites
 * @property Donation[] $donations
 * @property Population[] $populations
 * @property Supplier[] $suppliers
 * @property Supply[] $supplies
 * @property User[] $users
 * @property Volunteer[] $volunteers
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
            [['name', 'city_municipal', 'province', 'region'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['name', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['city_municipal', 'province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal' => 'name', 'province' => 'province', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'city_municipal' => 'City Municipal',
            'province' => 'Province',
            'region' => 'Region',
            'updated_at' => 'Last Modified',
            'created_at' => 'Date Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipal()
    {
        return $this->hasOne(CityMunicipal::className(), ['name' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisasterSites()
    {
        return $this->hasMany(DisasterSite::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonations()
    {
        return $this->hasMany(Donation::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPopulations()
    {
        return $this->hasMany(Population::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVolunteers()
    {
        return $this->hasMany(Volunteer::className(), ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }
}
