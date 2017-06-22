<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamContent;

/**
 * TeamContentSearch represents the model behind the search form about `common\models\TeamContent`.
 */
class TeamContentSearch extends TeamContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'dr1', 'dr2', 'him1', 'him2', 'him3', 'him4', 'him5', 'yah1', 'yah2', 'yah3', 'yah4', 'yah5', 'huj1', 'huj2', 'huj3'], 'integer'],
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
        $query = TeamContent::find();

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
            'userid' => $this->userid,
            'dr1' => $this->dr1,
            'dr2' => $this->dr2,
            'him1' => $this->him1,
            'him2' => $this->him2,
            'him3' => $this->him3,
            'him4' => $this->him4,
            'him5' => $this->him5,
            'yah1' => $this->yah1,
            'yah2' => $this->yah2,
            'yah3' => $this->yah3,
            'yah4' => $this->yah4,
            'yah5' => $this->yah5,
            'huj1' => $this->huj1,
            'huj2' => $this->huj2,
            'huj3' => $this->huj3,
        ]);

        return $dataProvider;
    }
}
