<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vehicle".
 *
 * @property string $plate_number
 * @property string $name
 * @property string $type
 * @property string $type_star
 * @property string $classification
 * @property string $width
 * @property string $length
 * @property string $height
 * @property string $fuel_capacity
 * @property string $max_distance_fuel
 * @property string $capacity
 * @property string $owner
 * @property string $rent_owned
 * @property string $speed
 * @property integer $quantity
 * @property integer $remaining_vehicle
 * @property string $comment
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Request[] $requests
 * @property Barangay $barangay0
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
            [['plate_number', 'name', 'type', 'type_star', 'classification', 'owner', 'rent_owned', 'quantity'], 'required'],
            [['type', 'type_star', 'classification', 'rent_owned'], 'string'],
            [['quantity', 'remaining_vehicle'], 'integer'],
            [['plate_number'], 'string', 'max' => 20],
            [['name', 'owner', 'comment', 'barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['width', 'length', 'height', 'fuel_capacity', 'max_distance_fuel', 'capacity', 'speed'], 'string', 'max' => 45],
            [['plate_number'], 'unique'],
            [['barangay', 'city_municipal', 'province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'plate_number' => 'Plate Number',
            'name' => 'Name',
            'type' => 'Type',
            'type_star' => 'Type (Sea, Air, Road, Trail)',
            'classification' => 'Classification',
            'width' => 'Width',
            'length' => 'Length',
            'height' => 'Height',
            'fuel_capacity' => 'Fuel Capacity',
            'max_distance_fuel' => 'Max Distance Fuel',
            'capacity' => 'Capacity',
            'owner' => 'Owner',
            'rent_owned' => 'Rent Owned',
            'speed' => 'Speed',
            'quantity' => 'Quantity',
            'remaining_vehicle' => 'Remaining Vehicle',
            'comment' => 'Comment',
            'barangay' => 'Barangay',
            'city_municipal' => 'City Municipal',
            'province' => 'Province',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['vehicle_plate_number' => 'plate_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay0()
    {
        return $this->hasOne(Barangay::className(), ['name' => 'barangay', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }
}
