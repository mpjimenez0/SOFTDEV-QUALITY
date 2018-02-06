<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "barangay".
 *
 * @property string $id
 * @property string $name
 * @property string $longitude
 * @property string $latitude
 * @property integer $population
 * @property string $timestamp
 *
 * @property Address[] $addresses
 */
class Barangay extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'barangay';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name'], 'required'],
            [['longitude', 'latitude'], 'number'],
            [['population'], 'integer'],
            [['id'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 50],
            [['timestamp'], 'string', 'max' => 20],
            [['id'], 'unique'],
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
            'longitude' => 'Longitude',
            'latitude' => 'Latitude',
            'population' => 'Population',
            'timestamp' => 'Timestamp',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAddresses()
    {
        return $this->hasMany(Address::className(), ['barangay_id' => 'id']);
    }
}
