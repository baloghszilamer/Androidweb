<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "shipping_address".
 *
 * @property int $id
 * @property int $user_id
 * @property int $country_id
 * @property string $name
 * @property string $registration_number
 * @property string $vat_number
 * @property string $postacod
 * @property string $city
 * @property string $street
 * @property string $number
 * @property string $comment
 */
class ShippingAddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shipping_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'country_id', 'name', 'registration_number', 'vat_number', 'postacod', 'city', 'street', 'number', 'comment'], 'required'],
            [['id', 'user_id', 'country_id'], 'integer'],
            [['name', 'registration_number', 'vat_number', 'postacod', 'city', 'street', 'number', 'comment'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'country_id' => Yii::t('app', 'Country ID'),
            'name' => Yii::t('app', 'Name'),
            'registration_number' => Yii::t('app', 'Registration Number'),
            'vat_number' => Yii::t('app', 'Vat Number'),
            'postacod' => Yii::t('app', 'Postacod'),
            'city' => Yii::t('app', 'City'),
            'street' => Yii::t('app', 'Street'),
            'number' => Yii::t('app', 'Number'),
            'comment' => Yii::t('app', 'Comment'),
        ];
    }
}
