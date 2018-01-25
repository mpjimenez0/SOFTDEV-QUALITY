<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property string $plate_number
 * @property string $model
 * @property integer $is_lease
 * @property string $timestamp
 * @property integer $vehicle_category
 * @property integer $vehicle_type
 * @property string $available_day
 * @property string $available_hour_start
 * @property string $available_hour_end
 * @property integer $vehicle_size_id
 * @property string $address_barangay_id
 * @property integer $address_city_municipal_id
 * @property integer $address_province_id
 * @property integer $address_region_id
 *
 * @property DriverOfVehicle[] $driverOfVehicles
 * @property Driver[] $drivers
 * @property RequestedSupply[] $requestedSupplies
 * @property Address $addressBarangay
 * @property VehicleCategory $vehicleCategory
 * @property VehicleSize $vehicleSize
 * @property VehicleType $vehicleType
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
            [['plate_number', 'vehicle_category', 'vehicle_type', 'vehicle_size_id', 'address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'required'],
            [['is_lease', 'vehicle_category', 'vehicle_type', 'vehicle_size_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['available_day'], 'string'],
            [['plate_number', 'available_hour_start', 'available_hour_end', 'address_barangay_id'], 'string', 'max' => 10],
            [['model'], 'string', 'max' => 100],
            [['timestamp'], 'string', 'max' => 25],
            [['plate_number'], 'unique'],
            [['address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']],
            [['vehicle_category'], 'exist', 'skipOnError' => true, 'targetClass' => VehicleCategory::className(), 'targetAttribute' => ['vehicle_category' => 'id']],
            [['vehicle_size_id'], 'exist', 'skipOnError' => true, 'targetClass' => VehicleSize::className(), 'targetAttribute' => ['vehicle_size_id' => 'id']],
            [['vehicle_type'], 'exist', 'skipOnError' => true, 'targetClass' => VehicleType::className(), 'targetAttribute' => ['vehicle_type' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'plate_number' => 'Plate Number',
            'model' => 'Model',
            'is_lease' => 'Is Lease',
            'timestamp' => 'Timestamp',
            'vehicle_category' => 'Vehicle Category',
            'vehicle_type' => 'Vehicle Type',
            'available_day' => 'Available Day',
            'available_hour_start' => 'Available Hour Start',
            'available_hour_end' => 'Available Hour End',
            'vehicle_size_id' => 'Vehicle Size ID',
            'address_barangay_id' => 'Address Barangay ID',
            'address_city_municipal_id' => 'Address City Municipal ID',
            'address_province_id' => 'Address Province ID',
            'address_region_id' => 'Address Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriverOfVehicles()
    {
        return $this->hasMany(DriverOfVehicle::className(), ['vehicle_plate_number' => 'plate_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDrivers()
    {
        return $this->hasMany(Driver::className(), ['id' => 'driver_id'])->viaTable('driver_of_vehicle', ['vehicle_plate_number' => 'plate_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestedSupplies()
    {
        return $this->hasMany(RequestedSupply::className(), ['vehicle_plate_number' => 'plate_number']);
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
    public function getVehicleCategory()
    {
        return $this->hasOne(VehicleCategory::className(), ['id' => 'vehicle_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleSize()
    {
        return $this->hasOne(VehicleSize::className(), ['id' => 'vehicle_size_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicleType()
    {
        return $this->hasOne(VehicleType::className(), ['id' => 'vehicle_type']);
    }
}
