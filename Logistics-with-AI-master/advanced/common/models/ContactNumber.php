<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_number".
 *
 * @property integer $id
 * @property string $contact_number
 *
 * @property Personal[] $personals
 * @property SupplierHasContactNumber[] $supplierHasContactNumbers
 * @property Supplier[] $suppliers
 * @property WarehouseDetailInfo[] $warehouseDetailInfos
 * @property Warehouse[] $warehouses
 */
class ContactNumber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_number';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_number'], 'required'],
            [['contact_number'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contact_number' => 'Contact Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonals()
    {
        return $this->hasMany(Personal::className(), ['contact_number' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierHasContactNumbers()
    {
        return $this->hasMany(SupplierHasContactNumber::className(), ['contact_number_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['id' => 'supplier_id'])->viaTable('supplier_has_contact_number', ['contact_number_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseDetailInfos()
    {
        return $this->hasMany(WarehouseDetailInfo::className(), ['contact_number' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(Warehouse::className(), ['id' => 'warehouse_id'])->viaTable('warehouse_detail_info', ['contact_number' => 'id']);
    }
}
