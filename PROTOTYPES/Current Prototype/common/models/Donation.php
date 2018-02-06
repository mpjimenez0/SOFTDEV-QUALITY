<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $contact
 * @property string $organization
 * @property string $type_of_donation
 * @property integer $supply_code
 * @property string $date_today
 * @property string $receiver
 * @property string $legal_status_of_org
 * @property integer $total_member
 * @property string $comment
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Supply $supplyCode
 * @property Barangay $barangay0
 */
class Donation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'contact', 'city_municipal', 'region'], 'required'],
            [['type_of_donation'], 'string'],
            [['supply_code', 'total_member'], 'integer'],
            [['date_today'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'email', 'organization', 'receiver', 'legal_status_of_org', 'comment', 'barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 45],
            [['supply_code'], 'exist', 'skipOnError' => true, 'targetClass' => Supply::className(), 'targetAttribute' => ['supply_code' => 'code']],
            [['barangay', 'city_municipal', 'province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'contact' => 'Contact',
            'organization' => 'Organization',
            'type_of_donation' => 'Type Of Donation',
            'supply_code' => 'Supply Code',
            'date_today' => 'Date',
            'receiver' => 'Receiver',
            'legal_status_of_org' => 'Legal Status Of Organization',
            'total_member' => 'Total Member',
            'comment' => 'Comment',
            'barangay' => 'Barangay',
            'city_municipal' => 'City/Municipal',
            'province' => 'Province',
            'region' => 'Region',
        ];
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
    public function getBarangay0()
    {
        return $this->hasOne(Barangay::className(), ['name' => 'barangay', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }
}
