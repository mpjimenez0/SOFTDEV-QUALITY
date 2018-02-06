<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supplier_has_contact_number".
 *
 * @property integer $supplier_id
 * @property integer $contact_number_id
 *
 * @property ContactNumber $contactNumber
 * @property Supplier $supplier
 */
class SupplierHasContactNumber extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier_has_contact_number';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supplier_id', 'contact_number_id'], 'required'],
            [['supplier_id', 'contact_number_id'], 'integer'],
            [['contact_number_id'], 'exist', 'skipOnError' => true, 'targetClass' => ContactNumber::className(), 'targetAttribute' => ['contact_number_id' => 'id']],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'contact_number_id' => 'Contact Number ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactNumber()
    {
        return $this->hasOne(ContactNumber::className(), ['id' => 'contact_number_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(Supplier::className(), ['id' => 'supplier_id']);
    }
}
