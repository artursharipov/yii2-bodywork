<?php

namespace app\modules\bodywork\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\bodywork\models\ClassDetail;

/**
 * ClassDetailSearch represents the model behind the search form of `app\modules\bodywork\models\ClassDetail`.
 */
class ClassDetailSearch extends ClassDetail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'price', 'status', 'count_side', 'class_auto_id'], 'integer'],
            [['name', 'd'], 'safe'],
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
        $query = ClassDetail::find();

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
            'id' => $this->id,
            'price' => $this->price,
            'status' => $this->status,
            'count_side' => $this->count_side,
            'class_auto_id' => $this->class_auto_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'd', $this->d]);

        return $dataProvider;
    }
}
