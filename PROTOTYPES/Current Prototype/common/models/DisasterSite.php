<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "disaster_site".
 *
 * @property integer $id
 * @property string $name
 * @property string $type
 * @property string $contact
 * @property string $year_established
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Barangay $barangay0
 */
class DisasterSite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disaster_site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'year_established', 'city_municipal', 'region'], 'required'],
            [['type'], 'string'],
            [['year_established'], 'safe'],
            [['name', 'barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 45],
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
            'name' => 'Name',
            'type' => 'Site Type',
            'contact' => 'Contact',
            'year_established' => 'Year Established',
            'barangay' => 'Barangay',
            'city_municipal' => 'City/Municipal',
            'province' => 'Province',
            'region' => 'Region',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay0()
    {
        return $this->hasOne(Barangay::className(), ['name' => 'barangay', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']);
    }
}
