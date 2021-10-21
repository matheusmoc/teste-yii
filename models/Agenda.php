<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agenda".
 *
 * @property int $id
 * @property string $title
 * @property string $data_inicio
 * @property string $imagem_evento
 * @property string $created_at
 * @property string|null $updated_at
 * @property int|null $POST_ID
 *
 * @property Post $pOST
 */
class Agenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'data_inicio', 'imagem_evento', 'created_at'], 'required'],
            [['data_inicio'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['POST_ID'], 'integer'],
            [['title', 'imagem_evento'], 'string', 'max' => 255],
            [['POST_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['POST_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'data_inicio' => 'Data Inicio',
            'imagem_evento' => 'Imagem Evento',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'POST_ID' => 'Post  ID',
        ];
    }

    /**
     * Gets query for [[POST]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPOST()
    {
        return $this->hasOne(Post::className(), ['ID' => 'POST_ID']);
    }
}
