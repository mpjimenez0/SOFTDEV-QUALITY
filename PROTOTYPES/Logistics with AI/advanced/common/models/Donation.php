<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "donation".
 *
 * @property integer $id
 * @property string $date
 * @property string $method
 * @property integer $donation_type_id
 * @property string $description
 *
 * @property DonationType $donationType
 * @property UserHasDonation[] $userHasDonations
 * @property UserInfo[] $userInfoUsers
 */
class Donation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donation_type_id'], 'required'],
            [['donation_type_id'], 'integer'],
            [['description'], 'string'],
            [['date'], 'string', 'max' => 45],
            [['method'], 'string', 'max' => 50],
            [['donation_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => DonationType::className(), 'targetAttribute' => ['donation_type_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Date',
            'method' => 'Method',
            'donation_type_id' => 'Donation Type ID',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonationType()
    {
        return $this->hasOne(DonationType::className(), ['id' => 'donation_type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserHasDonations()
    {
        return $this->hasMany(UserHasDonation::className(), ['donation_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfoUsers()
    {
        return $this->hasMany(UserInfo::className(), ['user_id' => 'user_info_user_id'])->viaTable('user_has_donation', ['donation_id' => 'id']);
    }
}
