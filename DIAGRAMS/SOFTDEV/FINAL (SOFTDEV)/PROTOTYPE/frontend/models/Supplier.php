<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $contact_person
 * @property string $website
 * @property int $barangay_id
 * @property int $city_municipal_id
 * @property int $region_id
 *
 * @property Resource[] $resources
 * @property Barangay $barangay
 * @property CityMunicipal $cityMunicipal
 * @property Region $region
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'barangay_id', 'city_municipal_id', 'region_id'], 'required'],
            [['id', 'barangay_id', 'city_municipal_id', 'region_id'], 'integer'],
            [['name', 'contact', 'contact_person'], 'string', 'max' => 100],
            [['email', 'website'], 'string', 'max' => 150],
            [['barangay_id'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay_id' => 'id']],
            [['city_municipal_id'], 'exist', 'skipOnError' => true, 'targetClass' => CityMunicipal::className(), 'targetAttribute' => ['city_municipal_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
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
            'contact' => 'Contact',
            'email' => 'Email',
            'contact_person' => 'Contact Person',
            'website' => 'Website',
            'barangay_id' => 'Barangay ID',
            'city_municipal_id' => 'City Municipal ID',
            'region_id' => 'Region ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResources()
    {
        return $this->hasMany(Resource::className(), ['supplier_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBarangay()
    {
        return $this->hasOne(Barangay::className(), ['id' => 'barangay_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCityMunicipal()
    {
        return $this->hasOne(CityMunicipal::className(), ['id' => 'city_municipal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }
}
