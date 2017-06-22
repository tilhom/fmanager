<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TeamMatch;

/**
 * TeamMatchSearch represents the model behind the search form about `common\models\TeamMatch`.
 */
class TeamMatchSearch extends TeamMatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userid', 'match_id', 'dr1', 'plr1', 'plr2', 'plr3', 'plr4', 'plr5', 'plr6', 'plr7', 'plr8', 'plr9', 'plr10', 'dr2', 'zah1', 'zah2', 'zah3'], 'integer'],
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
        $query = TeamMatch::find();

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
            'match_id' => $this->match_id,
            'dr1' => $this->dr1,
            'plr1' => $this->plr1,
            'plr2' => $this->plr2,
            'plr3' => $this->plr3,
            'plr4' => $this->plr4,
            'plr5' => $this->plr5,
            'plr6' => $this->plr6,
            'plr7' => $this->plr7,
            'plr8' => $this->plr8,
            'plr9' => $this->plr9,
            'plr10' => $this->plr10,
            'dr2' => $this->dr2,
            'zah1' => $this->zah1,
            'zah2' => $this->zah2,
            'zah3' => $this->zah3,
        ]);

        return $dataProvider;
    }
}
