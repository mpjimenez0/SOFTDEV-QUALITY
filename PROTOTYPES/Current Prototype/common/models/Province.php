<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property string $name
 * @property string $region
 *
 * @property CityMunicipal[] $cityMunicipals
 * @property Region $region0
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'region'], 'required'],
            [['name', 'region'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region' => 'name']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipals()
    {
        return $this->hasMany(CityMunicipal::className(), ['province' => 'name', 'region' => 'region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion0()
    {
        return $this->hasOne(Region::className(), ['name' => 'region']);
    }
}
