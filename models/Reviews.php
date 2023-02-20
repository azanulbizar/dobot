<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%reviews}}".
 *
 * @property int $id
 * @property string $name
 * @property string $review
 * @property string $date_create
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%reviews}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'review'], 'required'],
            [['review'], 'string'],
            [['date_create'], 'safe'],
            [['name'], 'string', 'max' => 60],
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
            'review' => Yii::t('app', 'Review'),
            'date_create' => Yii::t('app', 'Date Create'),
        ];
    }
}
