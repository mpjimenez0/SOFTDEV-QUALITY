<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "warehouse_category".
 *
 * @property integer $id
 * @property string $name
 * @property string $timestamp
 * @property string $description
 *
 * @property Warehouse[] $warehouses
 */
class WarehouseCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'warehouse_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 255],
            [['timestamp'], 'string', 'max' => 25],
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
            'timestamp' => 'Timestamp',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouses()
    {
        return $this->hasMany(Warehouse::className(), ['warehouse_category_id' => 'id']);
    }
}
