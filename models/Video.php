<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "video".
 *
 * @property int $ID
 * @property string $title
 * @property string $content
 * @property string|null $description
 * @property int|null $POST_ID
 * @property int|null $USUARIO_ID
 *
 * @property Post $pOST
 * @property Usuario $uSUARIO
 */
class Video extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content'], 'required'],
            [['description'], 'string'],
            [['POST_ID', 'USUARIO_ID'], 'integer'],
            [['title', 'content'], 'string', 'max' => 255],
            [['POST_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Post::className(), 'targetAttribute' => ['POST_ID' => 'ID']],
            [['USUARIO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['USUARIO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'description' => 'Description',
            'POST_ID' => 'Post  ID',
            'USUARIO_ID' => 'Usuario  ID',
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

    /**
     * Gets query for [[USUARIO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUSUARIO()
    {
        return $this->hasOne(Usuario::className(), ['ID' => 'USUARIO_ID']);
    }
}
