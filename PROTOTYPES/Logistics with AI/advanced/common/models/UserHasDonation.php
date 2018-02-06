<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_has_donation".
 *
 * @property integer $user_info_user_id
 * @property integer $donation_id
 * @property string $amount
 * @property integer $quantity
 *
 * @property Donation $donation
 * @property UserInfo $userInfoUser
 */
class UserHasDonation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_has_donation';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_info_user_id', 'donation_id'], 'required'],
            [['user_info_user_id', 'donation_id', 'quantity'], 'integer'],
            [['amount'], 'string', 'max' => 45],
            [['donation_id'], 'exist', 'skipOnError' => true, 'targetClass' => Donation::className(), 'targetAttribute' => ['donation_id' => 'id']],
            [['user_info_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserInfo::className(), 'targetAttribute' => ['user_info_user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_info_user_id' => 'User Info User ID',
            'donation_id' => 'Donation ID',
            'amount' => 'Amount',
            'quantity' => 'Quantity',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonation()
    {
        return $this->hasOne(Donation::className(), ['id' => 'donation_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserInfoUser()
    {
        return $this->hasOne(UserInfo::className(), ['user_id' => 'user_info_user_id']);
    }
}
