<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city_municipal".
 *
 * @property integer $id
 * @property string $name
 * @property string $longitude
 * @property string $latitude
 * @property integer $population
 * @property string $timestamp
 *
 * @property Address[] $addresses
 */
class CityMunicipal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city_municipal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['longitude', 'latitude'], 'number'],
            [['population'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['timestamp'], 'string', 'max' => 20],
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
        return $this->hasMany(Address::className(), ['city_municipal_id' => 'id']);
    }
}
