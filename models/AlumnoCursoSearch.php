<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AlumnoCurso;

/**
 * AlumnoCursoSearch represents the model behind the search form about `app\models\AlumnoCurso`.
 */
class AlumnoCursoSearch extends AlumnoCurso
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Curso_idCurso', 'Usuarios_Usuario'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = AlumnoCurso::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Curso_idCurso' => $this->Curso_idCurso,
            'Usuarios_Usuario' => $this->Usuarios_Usuario,
        ]);

        return $dataProvider;
    }
}
