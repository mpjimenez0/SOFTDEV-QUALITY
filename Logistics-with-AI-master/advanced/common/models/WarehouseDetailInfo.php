<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "warehouse_detail_info".
 *
 * @property integer $warehouse_id
 * @property integer $contact_number
 *
 * @property SupplyInWarehouse[] $supplyInWarehouses
 * @property SupplyDetailInfo[] $supplyDetailInfoSuppliers
 * @property ContactNumber $contactNumber
 * @property Warehouse $warehouse
 */
class WarehouseDetailInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouse_detail_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'contact_number'], 'required'],
            [['warehouse_id', 'contact_number'], 'integer'],
            [['contact_number'], 'exist', 'skipOnError' => true, 'targetClass' => ContactNumber::className(), 'targetAttribute' => ['contact_number' => 'id']],
            [['warehouse_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'warehouse_id' => 'Warehouse ID',
            'contact_number' => 'Contact Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyInWarehouses()
    {
        return $this->hasMany(SupplyInWarehouse::className(), ['warehouse_detail_info_warehouse_id' => 'warehouse_id', 'warehouse_detail_info_contact_number_id' => 'contact_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfoSuppliers()
    {
        return $this->hasMany(SupplyDetailInfo::className(), ['supplier_id' => 'supply_detail_info_supplier_id', 'supply_code' => 'supply_detail_info_supply_code'])->viaTable('supply_in_warehouse', ['warehouse_detail_info_warehouse_id' => 'warehouse_id', 'warehouse_detail_info_contact_number_id' => 'contact_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactNumber()
    {
        return $this->hasOne(ContactNumber::className(), ['id' => 'contact_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouse()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_id']);
    }
}
