<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "city_municipal".
 *
 * @property string $name
 * @property string $province
 * @property string $region
 *
 * @property Barangay[] $barangays
 * @property Province $province0
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
            [['name', 'province', 'region'], 'required'],
            [['name', 'province', 'region'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province' => 'name', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'province' => 'Province',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangays()
    {
        return $this->hasMany(Barangay::className(), ['city_municipal' => 'name', 'province' => 'province', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['name' => 'province', 'region' => 'region']);
    }
}
