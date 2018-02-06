<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "disaster".
 *
 * @property integer $id
 * @property integer $disaster_type
 * @property string $month
 * @property string $day
 * @property string $year
 * @property string $address_barangay_id
 * @property integer $address_city_municipal_id
 * @property integer $address_province_id
 * @property integer $address_region_id
 *
 * @property Address $addressBarangay
 * @property DisasterType $disasterType
 */
class Disaster extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disaster';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disaster_type', 'address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'required'],
            [['disaster_type', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['month', 'day', 'year'], 'string', 'max' => 45],
            [['address_barangay_id'], 'string', 'max' => 10],
            [['address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']],
            [['disaster_type'], 'exist', 'skipOnError' => true, 'targetClass' => DisasterType::className(), 'targetAttribute' => ['disaster_type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'disaster_type' => 'Disaster Type',
            'month' => 'Month',
            'day' => 'Day',
            'year' => 'Year',
            'address_barangay_id' => 'Address Barangay ID',
            'address_city_municipal_id' => 'Address City Municipal ID',
            'address_province_id' => 'Address Province ID',
            'address_region_id' => 'Address Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressBarangay()
    {
        return $this->hasOne(Address::className(), ['barangay_id' => 'address_barangay_id', 'city_municipal_id' => 'address_city_municipal_id', 'province_id' => 'address_province_id', 'region_id' => 'address_region_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDisasterType()
    {
        return $this->hasOne(DisasterType::className(), ['id' => 'disaster_type']);
    }
}
