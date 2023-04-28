<?php

namespace backend\modules\referensi\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\referensi\RefAgama;

/**
 * RefAgamaSearch represents the model behind the search form about `common\models\referensi\RefAgama`.
 */
class RefAgamaSearch extends RefAgama
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['AGAMA', 'CREATE_AT', 'UPDATE_AT'], 'safe'],
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
        $query = RefAgama::find();

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
            'ID' => $this->ID,
            'CREATE_AT' => $this->CREATE_AT,
            'UPDATE_AT' => $this->UPDATE_AT,
        ]);

        $query->andFilterWhere(['like', 'AGAMA', $this->AGAMA]);

        return $dataProvider;
    }
}
