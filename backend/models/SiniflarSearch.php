<?php

namespace app\Models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Siniflar;

/**
 * SiniflarSearch represents the model behind the search form of `app\models\Siniflar`.
 */
class SiniflarSearch extends Siniflar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sira_no'], 'integer'],
            [['sinif_ad'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Siniflar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'sira_no' => $this->sira_no,
        ]);

        $query->andFilterWhere(['like', 'sinif_ad', $this->sinif_ad]);

        return $dataProvider;
    }
}
