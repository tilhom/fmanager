<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\PlayerMatch;

/**
 * PlayerMatchSearch represents the model behind the search form about `common\models\PlayerMatch`.
 */
class PlayerMatchSearch extends PlayerMatch
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['player_id', 'matchweek_id', 'minutes', 'goal', 'assists', 'clean', 'goal_conseded', 'own_goal', 'penalti_saved', 'penalti_missed', 'yellow_card', 'red_card', 'saves', 'matchweek_point'], 'integer'],
            [['price'], 'number'],
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
        $query = PlayerMatch::find();

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
            'player_id' => $this->player_id,
            'matchweek_id' => $this->matchweek_id,
            'minutes' => $this->minutes,
            'goal' => $this->goal,
            'assists' => $this->assists,
            'clean' => $this->clean,
            'goal_conseded' => $this->goal_conseded,
            'own_goal' => $this->own_goal,
            'penalti_saved' => $this->penalti_saved,
            'penalti_missed' => $this->penalti_missed,
            'yellow_card' => $this->yellow_card,
            'red_card' => $this->red_card,
            'saves' => $this->saves,
            'price' => $this->price,
            'matchweek_point' => $this->matchweek_point,
        ]);

        return $dataProvider;
    }
}
