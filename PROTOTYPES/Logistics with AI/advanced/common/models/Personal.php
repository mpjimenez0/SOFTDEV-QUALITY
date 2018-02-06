<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $first
 * @property string $middle
 * @property string $last
 * @property string $birth_month
 * @property integer $birth_day
 * @property integer $birth_year
 * @property string $sex
 * @property integer $nationality
 * @property integer $contact_number
 * @property string $address_barangay_id
 * @property integer $address_city_municipal_id
 * @property integer $address_province_id
 * @property integer $address_region_id
 *
 * @property Driver[] $drivers
 * @property Address $addressBarangay
 * @property ContactNumber $contactNumber
 * @property UserInfo[] $userInfos
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first', 'last', 'birth_month', 'birth_day', 'birth_year', 'sex', 'nationality', 'contact_number', 'address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'required'],
            [['birth_month'], 'string'],
            [['birth_day', 'birth_year', 'nationality', 'contact_number', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['first', 'middle', 'last'], 'string', 'max' => 90],
            [['sex'], 'string', 'max' => 45],
            [['address_barangay_id'], 'string', 'max' => 10],
            [['address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']],
            [['contact_number'], 'exist', 'skipOnError' => true, 'targetClass' => ContactNumber::className(), 'targetAttribute' => ['contact_number' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first' => 'First',
            'middle' => 'Middle',
            'last' => 'Last',
            'birth_month' => 'Birth Month',
            'birth_day' => 'Birth Day',
            'birth_year' => 'Birth Year',
            'sex' => 'Sex',
            'nationality' => 'Nationality',
            'contact_number' => 'Contact Number',
            'address_barangay_id' => 'Address Barangay ID',
            'address_city_municipal_id' => 'Address City Municipal ID',
            'address_province_id' => 'Address Province ID',
            'address_region_id' => 'Address Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['personal_info' => 'id']);
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
    public function getContactNumber()
    {
        return $this->hasOne(ContactNumber::className(), ['id' => 'contact_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfos()
    {
        return $this->hasMany(UserInfo::className(), ['personal_id' => 'id']);
    }
}
