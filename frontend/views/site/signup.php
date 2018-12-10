<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\web\AssetBundle;
use yii\web\AppAsset;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>
                <?= $form->field($model,'mobilnumber')?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button','id'=>'submitb']) ?>
                </div>
                <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-app.js"></script>
                 <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-auth.js"></script>
                <script src="https://www.gstatic.com/firebasejs/4.2.0/firebase-database.js"></script>
                <!-- // <script src="https://www.gstatic.com/firebasejs/4.3.0/firebase.js"></script>
                <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>  -->
                <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.css" />
                 <script src="https://cdn.firebase.com/libs/firebaseui/2.3.0/firebaseui.js"> </script>
                
                
                 <!-- <script>
    var btn = document.getElementById('submitb');
    btn.addEventListener('click', function() {
      document.location.href = '<?php echo'phone.php' ?>';
    });
    </script>    -->
   

            <?php ActiveForm::end(); ?>
            

        </div>
    </div>
    
</div>
 <?php $this->registerJsFile('/../webshop2/frontend/views/site/firebase.js', [yii\web\JqueryAsset::className()]); ?>  





