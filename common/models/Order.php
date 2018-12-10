<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $user_id
 * @property int $shipping_address_id
 * @property int $billing_address_id
 * @property string $time
 * @property string $status
 * @property string $total
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'time', 'total'], 'required'],
            [['user_id', 'shipping_address_id', 'billing_address_id'], 'integer'],
            [['time'], 'safe'],
            [['status'], 'string'],
            [['total'], 'number'],
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
            'shipping_address_id' => Yii::t('app', 'Shipping Address ID'),
            'billing_address_id' => Yii::t('app', 'Billing Address ID'),
            'time' => Yii::t('app', 'Time'),
            'status' => Yii::t('app', 'Status'),
            'total' => Yii::t('app', 'Total'),
        ];
    }
}
