<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property string $date_needed
 * @property string $date_requested
 * @property string $reason
 * @property string $quantity_needed
 * @property string $priority
 * @property string $receipient
 * @property string $beneficiary
 * @property string $status
 * @property int $user_id
 * @property int $resource_id
 * @property int $vehicle_id
 *
 * @property User $user
 * @property Vehicle $vehicle
 * @property Resource $resource
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'date_needed', 'date_requested', 'quantity_needed', 'receipient', 'beneficiary','resource_id','vehicle_id','reason','status'], 'required'],
            [['id', 'user_id', 'resource_id', 'vehicle_id'], 'integer'],
            [['reason', 'status'], 'string'],
            [['date_needed', 'date_requested', 'quantity_needed', 'priority', 'receipient', 'beneficiary'], 'string', 'max' => 45],
            [['id'], 'unique'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['vehicle_id'], 'exist', 'skipOnError' => true, 'targetClass' => Vehicle::className(), 'targetAttribute' => ['vehicle_id' => 'id']],
            [['resource_id'], 'exist', 'skipOnError' => true, 'targetClass' => Resource::className(), 'targetAttribute' => ['resource_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_needed' => 'Date Needed',
            'date_requested' => 'Date Requested',
            'reason' => 'Reason',
            'quantity_needed' => 'Quantity Needed',
            'priority' => 'Priority',
            'receipient' => 'Receipient',
            'beneficiary' => 'Beneficiary',
            'status' => 'Status',
            'user_id' => 'Requestor',
            'resource_id' => 'Resource',
            'vehicle_id' => 'Vehicle',
            'username' => 'Username',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehicle()
    {
        return $this->hasOne(Vehicle::className(), ['id' => 'vehicle_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResource()
    {
        return $this->hasOne(Resource::className(), ['id' => 'resource_id']);
    }

    public function getUserType(){
      //Related model Class Name
      //related column name as select
      return $this->hasOne(User::className() ,['id' => 'user_id'])->select('type')->scalar();
    }
}
