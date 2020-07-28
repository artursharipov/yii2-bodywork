<?php

namespace app\modules\bodywork\models;

use Yii;

/**
 * This is the model class for table "class_detail".
 *
 * @property int $id
 * @property string $name
 * @property int $price
 * @property int $status
 * @property int $count_side
 * @property int $class_auto_id
 * @property string $d
 */
class ClassDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'class_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'price', 'class_auto_id', 'd'], 'required'],
            [['price', 'status', 'count_side', 'class_auto_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['d'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'price' => 'Цена',
            'status' => 'Статус',
            'count_side' => 'Стороны',
            'class_auto_id' => 'Класс авто',
            'd' => 'd property Svg',
        ];
    }
}
