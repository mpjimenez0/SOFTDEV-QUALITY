<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property string $name
 * @property string $acronym
 * @property string $contact
 * @property string $email
 * @property string $owner
 * @property string $website
 * @property string $barangay
 * @property string $city_municipal
 * @property string $province
 * @property string $region
 *
 * @property Barangay $barangay0
 * @property Supply[] $supplies
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
            [['name', 'contact', 'contact_person', 'city_municipal', 'region'], 'required'],
            [['name', 'acronym', 'email', 'contact_person', 'website', 'barangay', 'city_municipal', 'province', 'region'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['barangay', 'city_municipal', 'province', 'region'], 'exist', 'skipOnError' => true, 'targetClass' => Barangay::className(), 'targetAttribute' => ['barangay' => 'name', 'city_municipal' => 'city_municipal', 'province' => 'province', 'region' => 'region']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Supplier Name',
            'acronym' => 'Company Acronym',
            'contact' => 'Phone Number ',
            'email' => 'Email',
            'contact_person' => 'Who is the owner?',
            'website' => 'Website (if there\'s any)',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['supplier_name' => 'name']);
    }
}
