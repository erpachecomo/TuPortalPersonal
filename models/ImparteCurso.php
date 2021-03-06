<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ImparteCurso".
 *
 * @property integer $Curso_idCurso
 * @property integer $Usuarios_Usuario
 *
 * @property Curso $cursoIdCurso
 * @property Usuario $usuariosUsuario
 */
class ImparteCurso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ImparteCurso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Curso_idCurso', 'Usuarios_Usuario'], 'required'],
            [['Curso_idCurso', 'Usuarios_Usuario'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Curso_idCurso' => 'Curso Id Curso',
            'Usuarios_Usuario' => 'Usuarios  Usuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCursoIdCurso()
    {
        return $this->hasOne(Curso::className(), ['idCurso' => 'Curso_idCurso']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuariosUsuario()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'Usuarios_Usuario']);
    }
}
