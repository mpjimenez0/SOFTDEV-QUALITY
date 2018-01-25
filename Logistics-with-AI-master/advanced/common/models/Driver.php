<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "driver".
 *
 * @property integer $id
 * @property integer $personal_info
 * @property string $type
 *
 * @property Personal $personalInfo
 * @property DriverOfVehicle[] $driverOfVehicles
 * @property Vehicle[] $vehiclePlateNumbers
 */
class Driver extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'driver';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personal_info'], 'required'],
            [['personal_info'], 'integer'],
            [['type'], 'string', 'max' => 45],
            [['personal_info'], 'exist', 'skipOnError' => true, 'targetClass' => Personal::className(), 'targetAttribute' => ['personal_info' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'personal_info' => 'Personal Info',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonalInfo()
    {
        return $this->hasOne(Personal::className(), ['id' => 'personal_info']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDriverOfVehicles()
    {
        return $this->hasMany(DriverOfVehicle::className(), ['driver_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiclePlateNumbers()
    {
        return $this->hasMany(Vehicle::className(), ['plate_number' => 'vehicle_plate_number'])->viaTable('driver_of_vehicle', ['driver_id' => 'id']);
    }
}
