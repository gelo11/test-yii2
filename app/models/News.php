<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%news}}".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $image Изображение
 * @property string $short Короткий текс
 * @property string $full Описание
 * @property string $created Создано
 */
class News extends \yii\db\ActiveRecord
{
    public $upload_path = 'news/';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%news}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'image', 'short', 'full', 'created'], 'required'],
            [['short', 'full'], 'string'],
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
            'short' => 'Короткий текс',
            'full' => 'Описание',
            'created' => 'Создано',
        ];
    }

    public function getImageUrl() {
        if (empty($this->image))
            return '';
        return Yii::$app->params['upload_path'] . $this->upload_path . $this->image;
    }

    public static function findLatest($limit = 5)
    {
        return self::find()->select('id, title')->orderBy('created DESC')->limit($limit)->all();
    }

}
