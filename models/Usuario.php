<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $ID
 * @property string|null $LOGIN
 * @property string|null $SENHA
 * @property string $NAME
 * @property int|null $NUCLEO_ID
 *
 * @property Nucleo $nUCLEO
 * @property Video[] $videos
 */

 class Usuario extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface

{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['NAME'], 'required'],
            [['NUCLEO_ID'], 'integer'],
            [['LOGIN', 'SENHA', 'NAME'], 'string', 'max' => 255],
            [['NUCLEO_ID'], 'exist', 'skipOnError' => true, 'targetClass' => Nucleo::className(), 'targetAttribute' => ['NUCLEO_ID' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'LOGIN' => 'Login',
            'SENHA' => 'Senha',
            'NAME' => 'Name',
            'NUCLEO_ID' => 'Nucleo  ID',
        ];
    }

    /**
     * Gets query for [[NUCLEO]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNUCLEO()
    {
        return $this->hasOne(Nucleo::className(), ['ID' => 'NUCLEO_ID']);
    }

    /**
     * Gets query for [[Videos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getVideos()
    {
        return $this->hasMany(Video::className(), ['USUARIO_ID' => 'ID']);
    }




    /**
    * {@inheritdoc}
    */
   public static function findIdentity($id)
   {
       return static::findOne($id);
   }

   /**
    * {@inheritdoc}
    */
   public static function findIdentityByAccessToken($token, $type = null)
   {
       throw new  yii\base\UnknownPropertyException();
   }

       /**
    * {@inheritdoc}
    */
   public function getId()
   {
       return $this->ID;
   }

   /**
    * {@inheritdoc}
    */
   public function getAuthKey()
   {
       //throw new  yii\base\UnknownPropertyException();
   }

   public function validateAuthKey($authKey)
   {
       //throw new  yii\base\UnknownPropertyException();
   }

   public static function findByUsername($username){
       return self::findOne(['LOGIN'=>$username]);
   }

   public function validatePassword($password)
   {
       return $this->SENHA === $password;
   }

}
