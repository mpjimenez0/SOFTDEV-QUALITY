<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $account_status
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $contact
 * @property string $role
 * @property string $external_type
 * @property int $region_id
 * @property int $city_municipal_id
 * @property int $barangay_id
 *
 * @property Barangay $barangay
 * @property CityMunicipal $cityMunicipal
 * @property Region $region
 * @property Vehicle[] $vehicles
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'first_name', 'last_name', 'contact', 'role', 'region_id', 'city_municipal_id', 'barangay_id'], 'required'],
            [['status', 'created_at', 'updated_at', 'region_id', 'city_municipal_id', 'barangay_id'], 'integer'],
            [['account_status'], 'string'],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['first_name', 'middle_name', 'last_name', 'role', 'external_type'], 'string', 'max' => 45],
            [['contact'], 'string', 'max' => 11],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
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
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'account_status' => 'Account Status',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'contact' => 'Contact',
            'type' => 'Type',
            'external_type' => 'External Type',
            'region_id' => 'Region',
            'city_municipal_id' => 'City Municipal',
            'barangay_id' => 'Barangay',
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
    public function getVehicles()
    {
        return $this->hasMany(Vehicle::className(), ['user_id' => 'id']);
    }
}
