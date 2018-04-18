<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property int $id
 * @property string $name
 * @property string $plate_number
 * @property string $type
 * @property string $type_star
 * @property string $classification
 * @property string $status
 * @property string $tracking_number
 * @property int $user_id
 * @property int $region_id
 * @property int $city_municipal_id
 * @property int $barangay_id
 *
 * @property Barangay $barangay
 * @property CityMunicipal $cityMunicipal
 * @property Region $region
 * @property User $user
 */
class Vehicle extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehicle';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'plate_number', 'type', 'type_star', 'classification', 'status', 'tracking_number', 'user_id', 'region_id', 'city_municipal_id', 'barangay_id'], 'required'],
            [['type', 'type_star', 'classification', 'status'], 'string'],
            [['user_id', 'region_id', 'city_municipal_id', 'barangay_id'], 'integer'],
            [['name', 'plate_number', 'tracking_number'], 'string', 'max' => 255],
            [['barangay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay_id' => 'id']],
            [['city_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'plate_number' => 'Plate Number',
            'type' => 'Type',
            'type_star' => 'Type Star',
            'classification' => 'Classification',
            'status' => 'Status',
            'tracking_number' => 'Tracking Number',
            'user_id' => 'User ID',
            'region_id' => 'Region ID',
            'city_municipal_id' => 'City Municipal ID',
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
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
