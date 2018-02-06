<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "primary_commodity".
 *
 * @property integer $id
 * @property string $name
 * @property string $timestamp
 * @property string $descrption
 *
 * @property Supplier[] $suppliers
 */
class PrimaryCommodity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'primary_commodity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['descrption'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['timestamp'], 'string', 'max' => 20],
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
            'timestamp' => 'Timestamp',
            'descrption' => 'Descrption',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['primary_commodity_id' => 'id']);
    }
}
