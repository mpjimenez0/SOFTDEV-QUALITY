<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $website
 * @property string $contact_person
 * @property string $timestamp
 * @property string $principal_name
 * @property string $principal_title
 * @property integer $business_number_of_year
 * @property string $description
 * @property integer $supplier_type
 * @property integer $legal_structure_id
 * @property integer $primary_commodity_id
 *
 * @property LegalStructure $legalStructure
 * @property PrimaryCommodity $primaryCommodity
 * @property SupplierType $supplierType
 * @property SupplierHasContactNumber[] $supplierHasContactNumbers
 * @property ContactNumber[] $contactNumbers
 * @property SupplyDetailInfo[] $supplyDetailInfos
 * @property Supply[] $supplyCodes
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'supplier_type', 'legal_structure_id', 'primary_commodity_id'], 'required'],
            [['principal_title', 'description'], 'string'],
            [['business_number_of_year', 'supplier_type', 'legal_structure_id', 'primary_commodity_id'], 'integer'],
            [['name', 'website', 'contact_person', 'principal_name'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['timestamp'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['legal_structure_id'], 'exist', 'skipOnError' => true, 'targetClass' => LegalStructure::className(), 'targetAttribute' => ['legal_structure_id' => 'id']],
            [['primary_commodity_id'], 'exist', 'skipOnError' => true, 'targetClass' => PrimaryCommodity::className(), 'targetAttribute' => ['primary_commodity_id' => 'id']],
            [['supplier_type'], 'exist', 'skipOnError' => true, 'targetClass' => SupplierType::className(), 'targetAttribute' => ['supplier_type' => 'id']],
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
            'email' => 'Email',
            'website' => 'Website',
            'contact_person' => 'Contact Person',
            'timestamp' => 'Timestamp',
            'principal_name' => 'Principal Name',
            'principal_title' => 'Principal Title',
            'business_number_of_year' => 'Business Number Of Year',
            'description' => 'Description',
            'supplier_type' => 'Supplier Type',
            'legal_structure_id' => 'Legal Structure ID',
            'primary_commodity_id' => 'Primary Commodity ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLegalStructure()
    {
        return $this->hasOne(LegalStructure::className(), ['id' => 'legal_structure_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrimaryCommodity()
    {
        return $this->hasOne(PrimaryCommodity::className(), ['id' => 'primary_commodity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierType()
    {
        return $this->hasOne(SupplierType::className(), ['id' => 'supplier_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplierHasContactNumbers()
    {
        return $this->hasMany(SupplierHasContactNumber::className(), ['supplier_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactNumbers()
    {
        return $this->hasMany(ContactNumber::className(), ['id' => 'contact_number_id'])->viaTable('supplier_has_contact_number', ['supplier_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyDetailInfos()
    {
        return $this->hasMany(SupplyDetailInfo::className(), ['supplier_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyCodes()
    {
        return $this->hasMany(Supply::className(), ['code' => 'supply_code'])->viaTable('supply_detail_info', ['supplier_id' => 'id']);
    }
}
