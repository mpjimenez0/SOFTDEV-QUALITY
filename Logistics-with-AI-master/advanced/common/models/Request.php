<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property integer $id
 * @property string $date_requested
 * @property string $date_needed
 * @property string $quantity
 * @property string $description
 * @property integer $tracking_number
 * @property integer $delivery_status
 * @property integer $user_id
 * @property string $address_barangay_id
 * @property integer $address_city_municipal_id
 * @property integer $address_province_id
 * @property integer $address_region_id
 *
 * @property Address $addressBarangay
 * @property DeliveryStatus $deliveryStatus
 * @property UserInfo $user
 * @property RequestedSupply[] $requestedSupplies
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['tracking_number', 'delivery_status', 'user_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'integer'],
            [['delivery_status', 'user_id', 'address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'required'],
            [['date_requested', 'date_needed', 'quantity'], 'string', 'max' => 45],
            [['address_barangay_id'], 'string', 'max' => 10],
            [['address_barangay_id', 'address_city_municipal_id', 'address_province_id', 'address_region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Address::className(), 'targetAttribute' => ['address_barangay_id' => 'barangay_id', 'address_city_municipal_id' => 'city_municipal_id', 'address_province_id' => 'province_id', 'address_region_id' => 'region_id']],
            [['delivery_status'], 'exist', 'skipOnError' => true, 'targetClass' => DeliveryStatus::className(), 'targetAttribute' => ['delivery_status' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserInfo::className(), 'targetAttribute' => ['user_id' => 'user_id']],
            [['delivery_status'], 'required', 'on' => 'confirmation'],
            [['delivery_status'], 'required', 'on' => 'intransiting'],
            [['delivery_status'], 'required', 'on' => 'arriving'],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios(); // TODO: Change the autogenerated stub
        $scenarios['confirmation'] = ['delivery_status'];
        $scenarios['intransiting'] = ['delivery_status'];
        $scenarios['arriving'] = ['delivery_status'];

        return $scenarios;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_requested' => 'Date Requested',
            'date_needed' => 'Date Needed',
            'quantity' => 'Quantity',
            'description' => 'Description',
            'tracking_number' => 'Tracking Number',
            'delivery_status' => 'Delivery Status',
            'user_id' => 'User ID',
            'address_barangay_id' => 'Address Barangay ID',
            'address_city_municipal_id' => 'Address City Municipal ID',
            'address_province_id' => 'Address Province ID',
            'address_region_id' => 'Address Region ID',
        ];
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
    public function getDeliveryStatus()
    {
        return $this->hasOne(DeliveryStatus::className(), ['id' => 'delivery_status']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(UserInfo::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequestedSupplies()
    {
        return $this->hasMany(RequestedSupply::className(), ['request_id' => 'id', 'request_user_info_user_id' => 'user_id']);
    }
}
