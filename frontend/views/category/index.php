<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BillingAddressSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Create Newpost');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billing-address-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Newpost'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'country_id',
            'name',
            'registration_number',
            //'vat_number',
            //'postacod',
            //'city',
            //'street',
            //'number',
            //'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
