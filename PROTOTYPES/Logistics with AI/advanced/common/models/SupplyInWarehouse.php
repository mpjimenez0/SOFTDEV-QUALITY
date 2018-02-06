<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supply_in_warehouse".
 *
 * @property integer $supply_detail_info_supplier_id
 * @property integer $supply_detail_info_supply_code
 * @property integer $warehouse_detail_info_warehouse_id
 * @property integer $warehouse_detail_info_contact_number_id
 * @property integer $quantity
 *
 * @property WarehouseDetailInfo $warehouseDetailInfoWarehouse
 * @property SupplyDetailInfo $supplyDetailInfoSupplier
 */
class SupplyInWarehouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supply_in_warehouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supply_detail_info_supplier_id', 'supply_detail_info_supply_code', 'warehouse_detail_info_warehouse_id', 'warehouse_detail_info_contact_number_id'], 'required'],
            [['supply_detail_info_supplier_id', 'supply_detail_info_supply_code', 'warehouse_detail_info_warehouse_id', 'warehouse_detail_info_contact_number_id', 'quantity'], 'integer'],
            [['warehouse_detail_info_warehouse_id', 'warehouse_detail_info_contact_number_id'], 'exist', 'skipOnError' => true, 'targetClass' => WarehouseDetailInfo::className(), 'targetAttribute' => ['warehouse_detail_info_warehouse_id' => 'warehouse_id', 'warehouse_detail_info_contact_number_id' => 'contact_number']],
            [['supply_detail_info_supplier_id', 'supply_detail_info_supply_code'], 'exist', 'skipOnError' => true, 'targetClass' => SupplyDetailInfo::className(), 'targetAttribute' => ['supply_detail_info_supplier_id' => 'supplier_id', 'supply_detail_info_supply_code' => 'supply_code']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supply_detail_info_supplier_id' => 'Supply Detail Info Supplier ID',
            'supply_detail_info_supply_code' => 'Supply Detail Info Supply Code',
            'warehouse_detail_info_warehouse_id' => 'Warehouse Detail Info Warehouse ID',
            'warehouse_detail_info_contact_number_id' => 'Warehouse Detail Info Contact Number ID',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseDetailInfoWarehouse()
    {
        return $this->hasOne(WarehouseDetailInfo::className(), ['warehouse_id' => 'warehouse_detail_info_warehouse_id', 'contact_number' => 'warehouse_detail_info_contact_number_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfoSupplier()
    {
        return $this->hasOne(SupplyDetailInfo::className(), ['supplier_id' => 'supply_detail_info_supplier_id', 'supply_code' => 'supply_detail_info_supply_code']);
    }
}
