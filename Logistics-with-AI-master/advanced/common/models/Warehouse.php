<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property integer $id
 * @property string $name
 * @property string $contact_person_name
 * @property integer $year_established
 * @property string $description
 * @property string $area
 * @property string $timestamp
 * @property string $open_hours
 * @property string $close_hours
 * @property string $open_day
 * @property integer $warehouse_type_id
 * @property integer $warehouse_category_id
 * @property string $address_barangay_id
 * @property integer $address_city_municipal_id
 * @property integer $address_province_id
 * @property integer $address_region_id
 *
 * @property SupplyDetailInfo[] $supplyDetailInfos
 * @property Address $addressBarangay
 * @property WarehouseCategory $warehouseCategory
 * @property WarehouseType $warehouseType
 * @property WarehouseDetailInfo[] $warehouseDetailInfos
 * @property ContactNumber[] $contactNumbers
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['year_established', 'warehouse_type_id', 'warehouse_category_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['description'], 'string'],
            [['warehouse_type_id', 'warehouse_category_id', 'address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'required'],
            [['name', 'contact_person_name'], 'string', 'max' => 255],
            [['area', 'open_day'], 'string', 'max' => 45],
            [['timestamp'], 'string', 'max' => 25],
            [['open_hours', 'close_hours'], 'string', 'max' => 15],
            [['address_barangay_id'], 'string', 'max' => 10],
            [['address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']],
            [['warehouse_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => WarehouseCategory::className(), 'targetAttribute' => ['warehouse_category_id' => 'id']],
            [['warehouse_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => WarehouseType::className(), 'targetAttribute' => ['warehouse_type_id' => 'id']],
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
            'contact_person_name' => 'Contact Person Name',
            'year_established' => 'Year Established',
            'description' => 'Description',
            'area' => 'Area',
            'timestamp' => 'Timestamp',
            'open_hours' => 'Open Hours',
            'close_hours' => 'Close Hours',
            'open_day' => 'Open Day',
            'warehouse_type_id' => 'Warehouse Type ID',
            'warehouse_category_id' => 'Warehouse Category ID',
            'address_barangay_id' => 'Address Barangay ID',
            'address_city_municipal_id' => 'Address City Municipal ID',
            'address_province_id' => 'Address Province ID',
            'address_region_id' => 'Address Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfos()
    {
        return $this->hasMany(SupplyDetailInfo::className(), ['warehouse' => 'id']);
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
    public function getWarehouseCategory()
    {
        return $this->hasOne(WarehouseCategory::className(), ['id' => 'warehouse_category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseType()
    {
        return $this->hasOne(WarehouseType::className(), ['id' => 'warehouse_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseDetailInfos()
    {
        return $this->hasMany(WarehouseDetailInfo::className(), ['warehouse_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactNumbers()
    {
        return $this->hasMany(ContactNumber::className(), ['id' => 'contact_number'])->viaTable('warehouse_detail_info', ['warehouse_id' => 'id']);
    }
}
