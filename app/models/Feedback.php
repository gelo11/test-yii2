<?php

namespace app\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "{{%feedback}}".
 *
 * @property int $id
 * @property string $name Имя
 * @property string $phone Телефон
 * @property string $comment Сообщение
 * @property string $created Создано
 */
class Feedback extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%feedback}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'phone', 'comment', 'created'], 'required'],
            [['comment'], 'string'],
            [['created'], 'safe'],
            [['name'], 'string', 'max' => 250],
            [['phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'comment' => 'Сообщение',
            'created' => 'Создано',
        ];
    }

    public function beforeValidate()
    {
        if ($this->isNewRecord) {
            $this->created = new Expression('NOW()');
        }
        return parent::beforeValidate();
    }
}
