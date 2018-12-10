<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BillingAddress */

$this->title = Yii::t('app', 'Create Billing Address');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Billing Addresses'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="billing-address-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
