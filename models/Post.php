<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $ID
 * @property string|null $POST
 * @property string $title
 * @property string|null $content
 *
 * @property Agenda[] $agendas
 * @property Video[] $videos
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required', 'message' => '*Campo em branco'],
            [['content'], 'string'],
            [['POST', 'title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'Código do evento',
            'POST' => 'Evento',
            'title' => 'Título',
            'content' => 'Conteúdo',
        ];
    }

    /**
     * Gets query for [[Agendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgendas()
    {
        return $this->hasMany(Agenda::className(), ['POST_ID' => 'ID']);
    }

    /**
     * Gets query for [[Videos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['POST_ID' => 'ID']);
    }
}
