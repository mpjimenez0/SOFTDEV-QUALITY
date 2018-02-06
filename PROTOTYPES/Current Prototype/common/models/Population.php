<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "population".
 *
 * @property integer $id
 * @property integer $quantity
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Barangay $barangay0
 */
class Population extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'population';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['quantity'], 'integer'],
            [['city_municipal', 'region'], 'required'],
            [['barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
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
            'quantity' => 'Quantity',
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
