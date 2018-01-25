<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "unit_of_measurement".
 *
 * @property integer $id
 * @property string $name
 *
 * @property Supply[] $supplies
 */
class UnitOfMeasurement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unit_of_measurement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 25],
            [['name'], 'unique'],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplies()
    {
        return $this->hasMany(Supply::className(), ['unit_of_measurement_id' => 'id']);
    }
}
