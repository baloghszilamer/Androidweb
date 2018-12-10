<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property int $category_id
 * @property string $main_image
 * @property string $price
 * @property int $stock
 * @property int $sort
 * @property int $enable
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'main_image', 'price', 'stock', 'sort', 'enable'], 'required'],
            [['id', 'category_id', 'stock', 'sort', 'enable'], 'integer'],
            [['price'], 'number'],
            [['main_image'], 'string', 'max' => 100],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'main_image' => Yii::t('app', 'Main Image'),
            'price' => Yii::t('app', 'Price'),
            'stock' => Yii::t('app', 'Stock'),
            'sort' => Yii::t('app', 'Sort'),
            'enable' => Yii::t('app', 'Enable'),
        ];
    }
}
