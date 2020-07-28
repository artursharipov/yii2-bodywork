<?php

namespace app\modules\bodywork\models;

use Yii;

/**
 * This is the model class for table "class_auto".
 *
 * @property int $id
 * @property string $name
 * @property string $viewbox
 * @property int $status
 * @property int $sort
 */
class ClassAuto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'class_auto';
    }

    public function behaviors()
    {
        return [
            'img' => [
                'class' => \artursharipov\img\behaviors\ImgBehavior::className(),
                'hashClass' => "ClassAuto",
                'folder_image' => 'images/class-auto/',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'viewbox'], 'required'],
            [['status', 'sort'], 'integer'],
            [['name', 'viewbox'], 'string', 'max' => 255],
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
            'status' => 'Статус',
            'sort' => 'Сорт',
            'viewbox' => 'Viewbox',
        ];
    }
}
