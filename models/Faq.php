<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%faq}}".
 *
 * @property int $id
 * @property string $question
 * @property string $answer
 * @property string $create_date
 */
class Faq extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%faq}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['question', 'answer'], 'required'],
            [['answer'], 'string'],
            [['create_date'], 'safe'],
            [['question'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'question' => Yii::t('app', 'Question'),
            'answer' => Yii::t('app', 'Answer'),
            'create_date' => Yii::t('app', 'Create date'),
        ];
    }
}
