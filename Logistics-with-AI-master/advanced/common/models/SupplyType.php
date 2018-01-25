<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supply_type".
 *
 * @property integer $id
 * @property string $name
 * @property string $timestamp
 * @property string $description
 *
 * @property DonationType[] $donationTypes
 * @property Supply[] $supplies
 */
class SupplyType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supply_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['timestamp'], 'string', 'max' => 45],
            [['name'], 'unique'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonationTypes()
    {
        return $this->hasMany(DonationType::className(), ['supply_type_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['supply_type' => 'id']);
    }
}
