<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property int $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $type
 * @property string $capacity
 * @property string $status
 * @property int $city_municipal_id
 * @property int $region_id
 * @property int $barangay_id
 *
 * @property Barangay $barangay
 * @property CityMunicipal $cityMunicipal
 * @property Region $region
 * @property Resource[] $resources
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'status'], 'string'],
            [['city_municipal_id', 'region_id', 'barangay_id'], 'required'],
            [['city_municipal_id', 'region_id', 'barangay_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['contact', 'email', 'capacity'], 'string', 'max' => 45],
            [['barangay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay_id' => 'id']],
            [['city_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal_id' => 'id']],
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
            'name' => 'Name',
            'contact' => 'Contact',
            'email' => 'Email',
            'type' => 'Type',
            'capacity' => 'Capacity',
            'status' => 'Status',
            'city_municipal_id' => 'City Municipal ID',
            'region_id' => 'Region ID',
            'barangay_id' => 'Barangay ID',
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
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResources()
    {
        return $this->hasMany(Resource::className(), ['location_id' => 'id']);
    }
}
