<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%action}}".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $image Изображение
 * @property string $note Описание
 * @property string $created Создано
 */
class Action extends \yii\db\ActiveRecord
{
    public $upload_path = 'news/';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'note', 'created'], 'required'],
            [['note'], 'string'],
            [['created'], 'safe'],
            [['title'], 'string', 'max' => 250],
            [['image'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'image' => 'Изображение',
            'note' => 'Описание',
            'created' => 'Создано',
        ];
    }

    public function getImageUrl()
    {
        if (empty($this->image))
            return '';
        return Yii::$app->params['upload_path'] . $this->upload_path . $this->image;
    }

    public static function findLatest($limit = 5)
    {
        return self::find()->select('id, title')->orderBy('created DESC')->limit($limit)->all();
    }

}
