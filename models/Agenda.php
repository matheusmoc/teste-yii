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
            [['title', 'data_inicio', 'imagem_evento'], 'required'],
            [['data_inicio'], 'string'],
            [['title', 'imagem_evento'], 'string', 'max' => 255],
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
        ];
    }
}
