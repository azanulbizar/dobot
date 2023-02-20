<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%excursions}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $create_date
 */
class Excursions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%excursions}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['create_date'], 'safe'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'create_date' => Yii::t('app', 'Create Date'),
        ];
    }
}
