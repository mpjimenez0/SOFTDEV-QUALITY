<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "donation_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $timestamp
 * @property string $description
 * @property integer $supply_type_id
 *
 * @property Donation[] $donations
 * @property SupplyType $supplyType
 */
class DonationType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'supply_type_id'], 'required'],
            [['description'], 'string'],
            [['supply_type_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['timestamp'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['supply_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SupplyType::className(), 'targetAttribute' => ['supply_type_id' => 'id']],
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
            'timestamp' => 'Timestamp',
            'description' => 'Description',
            'supply_type_id' => 'Supply Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonations()
    {
        return $this->hasMany(Donation::className(), ['donation_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplyType()
    {
        return $this->hasOne(SupplyType::className(), ['id' => 'supply_type_id']);
    }
}
