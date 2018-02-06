<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property string $name
 * @property string $status
 * @property string $contact
 * @property string $email
 * @property string $area
 * @property string $year_established
 * @property integer $capacity
 * @property integer $room
 * @property string $private_public
 * @property string $comments
 * @property integer $total_warehouse
 * @property string $created_at
 * @property string $updated_at
 * @property integer $user
 * @property float $latitude
 * @property float $longitude
 * @property Supply[] $supplies
 * @property User $user_
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'status', 'year_established', 'private_public'], 'required'],
            [['status', 'private_public'], 'string'],
            [['year_established', 'created_at', 'updated_at', 'longitude', 'latitude'], 'safe'],
            [['capacity', 'room', 'total_warehouse', 'user'], 'integer'],
            [['name', 'email', 'comments'], 'string', 'max' => 255],
            [['contact', 'area'], 'string', 'max' => 45],
            [['name'], 'unique'],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'status' => 'Status',
            'contact' => 'Contact',
            'email' => 'Email',
            'area' => 'Area',
            'year_established' => 'Year Established',
            'capacity' => 'Capacity',
            'room' => 'Room',
            'private_public' => 'Private/Public',
            'comments' => 'Comments',
            'total_warehouse' => 'Total Warehouse',
            'created_at' => 'Created At',
            'updated_at' => 'Last Modified',
            'user' => 'User ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['warehouse_name' => 'name']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user']);
    }
}
