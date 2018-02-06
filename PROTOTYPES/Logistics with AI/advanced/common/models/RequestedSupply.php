<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "requested_supply".
 *
 * @property integer $request_id
 * @property integer $request_user_info_user_id
 * @property integer $supply_detail_info_supplier
 * @property integer $supply_detail_info_supply_code
 * @property string $quantity
 * @property string $start_date_expected
 * @property string $start_date_actual
 * @property string $end_date_expected
 * @property string $end_date_actual
 * @property string $vehicle_plate_number
 *
 * @property Request $request
 * @property SupplyDetailInfo $supplyDetailInfoSupplier
 * @property Vehicle $vehiclePlateNumber
 */
class RequestedSupply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'requested_supply';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['request_id', 'request_user_info_user_id', 'supply_detail_info_supplier', 'supply_detail_info_supply_code', 'vehicle_plate_number'], 'required'],
            [['request_id', 'request_user_info_user_id', 'supply_detail_info_supplier', 'supply_detail_info_supply_code'], 'integer'],
            [['quantity', 'start_date_expected', 'start_date_actual', 'end_date_expected', 'end_date_actual'], 'string', 'max' => 45],
            [['vehicle_plate_number'], 'string', 'max' => 10],
            [['request_id', 'request_user_info_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Request::className(), 'targetAttribute' => ['request_id' => 'id', 'request_user_info_user_id' => 'user_id']],
            [['supply_detail_info_supplier', 'supply_detail_info_supply_code'], 'exist', 'skipOnError' => true, 'targetClass' => SupplyDetailInfo::className(), 'targetAttribute' => ['supply_detail_info_supplier' => 'supplier_id', 'supply_detail_info_supply_code' => 'supply_code']],
            [['vehicle_plate_number'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_plate_number' => 'plate_number']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'request_id' => 'Request ID',
            'request_user_info_user_id' => 'Request User Info User ID',
            'supply_detail_info_supplier' => 'Supply Detail Info Supplier',
            'supply_detail_info_supply_code' => 'Supply Detail Info Supply Code',
            'quantity' => 'Quantity',
            'start_date_expected' => 'Start Date Expected',
            'start_date_actual' => 'Start Date Actual',
            'end_date_expected' => 'End Date Expected',
            'end_date_actual' => 'End Date Actual',
            'vehicle_plate_number' => 'Vehicle Plate Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequest()
    {
        return $this->hasOne(Request::className(), ['id' => 'request_id', 'user_id' => 'request_user_info_user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfoSupplier()
    {
        return $this->hasOne(SupplyDetailInfo::className(), ['supplier_id' => 'supply_detail_info_supplier', 'supply_code' => 'supply_detail_info_supply_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiclePlateNumber()
    {
        return $this->hasOne(Vehicle::className(), ['plate_number' => 'vehicle_plate_number']);
    }
}
