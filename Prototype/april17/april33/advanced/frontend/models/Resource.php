<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "resource".
 *
 * @property int $id
 * @property string $name
 * @property string $supply_type
 * @property string $quantity
 * @property string $date_delivered
 * @property string $date_received
 * @property string $details
 * @property string $expiration_date
 * @property string $remaining_supply
 * @property string $supply_category
 * @property int $supplier_id
 * @property int $location_id
 *
 * @property Request[] $requests
 * @property Supplier $supplier
 * @property Location $location
 */
class Resource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'resource';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['supply_type', 'supply_category'], 'string'],
            [['date_delivered', 'date_received'], 'safe'],
            [['name', 'quantity', 'supply_type', 'supplier_id', 'location_id'], 'required'],
            [['supplier_id', 'location_id'], 'integer'],
            [['name', 'details', 'expiration_date', 'remaining_supply'], 'string', 'max' => 45],
            [['quantity'], 'string', 'max' => 11],
            [['supplier_id'], 'exist', 'skipOnError' => true, 'targetClass' => Supplier::className(), 'targetAttribute' => ['supplier_id' => 'id']],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
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
            'supply_type' => 'Resource Type',
            'quantity' => 'Quantity',
            'date_delivered' => 'Date Delivered',
            'date_received' => 'Date Received',
            'details' => 'Details',
            'expiration_date' => 'Expiration Date',
            'remaining_supply' => 'Remaining Supply',
            'supply_category' => 'Supply Category',
            'supplier_id' => 'Supplier ID',
            'location_id' => 'Location ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequests()
    {
        return $this->hasMany(Request::className(), ['resource_id' => 'id']);
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
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }
}
