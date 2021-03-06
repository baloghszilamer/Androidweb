<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BillingAddress;

/**
 * BillingAddressSearch represents the model behind the search form of `common\models\BillingAddress`.
 */
class BillingAddressSearch extends BillingAddress
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'country_id'], 'integer'],
            [['name', 'registration_number', 'vat_number', 'postacod', 'city', 'street', 'number', 'comment'], 'safe'],
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
        $query = BillingAddress::find();

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
            'user_id' => $this->user_id,
            'country_id' => $this->country_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'registration_number', $this->registration_number])
            ->andFilterWhere(['like', 'vat_number', $this->vat_number])
            ->andFilterWhere(['like', 'postacod', $this->postacod])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'street', $this->street])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
