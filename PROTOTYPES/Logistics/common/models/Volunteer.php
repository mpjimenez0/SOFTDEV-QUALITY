<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "volunteer".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $organization
 * @property string $birth_year
 * @property string $type
 * @property string $contact
 * @property string $email
 * @property string $date_registered
 * @property string $occupation
 * @property string $available_time
 * @property string $available_day
 * @property integer $total_volunteer
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Request[] $requests
 * @property Barangay $barangay0
 */
class Volunteer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'volunteer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'organization', 'birth_year', 'occupation', 'available_time', 'available_day', 'city_municipal', 'region'], 'required'],
            [['birth_year', 'date_registered', 'available_time'], 'safe'],
            [['available_day'], 'string'],
            [['total_volunteer'], 'integer'],
            [['first_name', 'organization', 'type', 'email', 'occupation', 'barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['middle_name', 'last_name', 'contact'], 'string', 'max' => 45],
            [['barangay', 'city_municipal', 'province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'organization' => 'Organization',
            'birth_year' => 'Birth Year',
            'type' => 'Type of Volunteer',
            'contact' => 'Contact Number',
            'email' => 'Email',
            'date_registered' => 'Date Registered',
            'occupation' => 'Occupation',
            'available_time' => 'Available Time',
            'available_day' => 'Available Day/s',
            'total_volunteer' => 'Total Volunteer',
            'barangay' => 'Barangay',
            'city_municipal' => 'City/Municipal',
            'province' => 'Province',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['volunteer_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay0()
    {
        return $this->hasOne(Barangay::className(), ['name' => 'barangay', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }
}
