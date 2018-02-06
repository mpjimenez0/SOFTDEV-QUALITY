<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supply".
 *
 * @property integer $code
 * @property string $name
 * @property string $date_expiration
 * @property string $date_received
 * @property string $description
 * @property string $timestamp
 * @property integer $supply_type
 * @property integer $unit_of_measurement_id
 *
 * @property SupplyType $supplyType
 * @property UnitOfMeasurement $unitOfMeasurement
 * @property SupplyDetailInfo[] $supplyDetailInfos
 * @property Supplier[] $suppliers
 */
class Supply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'supply_type', 'unit_of_measurement_id'], 'required'],
            [['description'], 'string'],
            [['supply_type', 'unit_of_measurement_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['date_expiration', 'date_received', 'timestamp'], 'string', 'max' => 25],
            [['name'], 'unique'],
            [['supply_type'], 'exist', 'skipOnError' => true, 'targetClass' => SupplyType::className(), 'targetAttribute' => ['supply_type' => 'id']],
            [['unit_of_measurement_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnitOfMeasurement::className(), 'targetAttribute' => ['unit_of_measurement_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
            'date_expiration' => 'Date Expiration',
            'date_received' => 'Date Received',
            'description' => 'Description',
            'timestamp' => 'Timestamp',
            'supply_type' => 'Supply Type',
            'unit_of_measurement_id' => 'Unit Of Measurement ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyType()
    {
        return $this->hasOne(SupplyType::className(), ['id' => 'supply_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnitOfMeasurement()
    {
        return $this->hasOne(UnitOfMeasurement::className(), ['id' => 'unit_of_measurement_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfos()
    {
        return $this->hasMany(SupplyDetailInfo::className(), ['supply_code' => 'code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['id' => 'supplier_id'])->viaTable('supply_detail_info', ['supply_code' => 'code']);
    }
}
