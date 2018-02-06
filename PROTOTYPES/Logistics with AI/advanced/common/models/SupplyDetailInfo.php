<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supply_detail_info".
 *
 * @property integer $supplier_id
 * @property integer $supply_code
 * @property string $address_barangay
 * @property integer $address_city_municipal
 * @property integer $address_province
 * @property integer $address_region
 * @property integer $warehouse
 * @property integer $quantity
 *
 * @property RequestedSupply[] $requestedSupplies
 * @property Supplier $supplier
 * @property Supply $supplyCode
 * @property Address $addressBarangay
 * @property Warehouse $warehouse0
 * @property SupplyInWarehouse[] $supplyInWarehouses
 * @property WarehouseDetailInfo[] $warehouseDetailInfoWarehouses
 */
class SupplyDetailInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supply_detail_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_id', 'supply_code', 'address_barangay', 'address_city_municipal', 'address_province', 'address_region', 'warehouse'], 'required'],
            [['supplier_id', 'supply_code', 'address_city_municipal', 'address_province', 'address_region', 'warehouse', 'quantity'], 'integer'],
            [['address_barangay'], 'string', 'max' => 10],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
            [['supply_code'], 'exist', 'skipOnError' => true, 'targetClass' => Supply::className(), 'targetAttribute' => ['supply_code' => 'code']],
            [['address_barangay', 'address_city_municipal', 'address_province', 'address_region'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay' => 'barangay_id', 'address_city_municipal' => 'city_municipal_id', 'address_province' => 'province_id', 'address_region' => 'region_id']],
            [['warehouse'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'supply_code' => 'Supply Code',
            'address_barangay' => 'Address Barangay',
            'address_city_municipal' => 'Address City Municipal',
            'address_province' => 'Address Province',
            'address_region' => 'Address Region',
            'warehouse' => 'Warehouse',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestedSupplies()
    {
        return $this->hasMany(RequestedSupply::className(), ['supply_detail_info_supplier' => 'supplier_id', 'supply_detail_info_supply_code' => 'supply_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyCode()
    {
        return $this->hasOne(Supply::className(), ['code' => 'supply_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddressBarangay()
    {
        return $this->hasOne(Address::className(), ['barangay_id' => 'address_barangay', 'city_municipal_id' => 'address_city_municipal', 'province_id' => 'address_province', 'region_id' => 'address_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse0()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyInWarehouses()
    {
        return $this->hasMany(SupplyInWarehouse::className(), ['supply_detail_info_supplier_id' => 'supplier_id', 'supply_detail_info_supply_code' => 'supply_code']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseDetailInfoWarehouses()
    {
        return $this->hasMany(WarehouseDetailInfo::className(), ['warehouse_id' => 'warehouse_detail_info_warehouse_id', 'contact_number' => 'warehouse_detail_info_contact_number_id'])->viaTable('supply_in_warehouse', ['supply_detail_info_supplier_id' => 'supplier_id', 'supply_detail_info_supply_code' => 'supply_code']);
    }
}
