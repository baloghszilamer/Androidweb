<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



<div class="wrap">
 
<nav class="navbar navbar-default">
<img class="kep" src="<?php echo Yii::$app->request->baseUrl;?>/images/sapiadvertiser.png" alt="" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar">asfaf</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class=" navbar-left" href="/">
                   
                </a>
            </div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    <ul class="nav navbar-nav">
         <!-- <li class="active"><a href="#">Logout <span class="sr-only">(current)</span></a></li> --> 
        <!--<li><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i>&nbsp;<b>Kosár</b></a></li>-->
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Listazas</b> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <!--<li><a href="<?php echo Yii::$app->request->baseUrl; ?>/category/list"><b>Kategóriák</b></a></li>
            <li><a href="<?php echo Yii::$app->request->baseUrl; ?>/product/list"><b>Listazas</b></a></li>-->
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Keresés">
        </div>
        <button type="submit" class="btn btn-default"><b>Keresés</b></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Profil </b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><b>Személyes adatok</b></a></li>
            <li><a href="#"><b>Beallitasok</b></a></li>
           <!-- <li><a href="#"><b>Szállitások</b> </a></li>-->

          </ul>
        </li>
        <?php if(Yii::$app->user->isGuest):?>
        <li><a href="http://localhost/webshop2/site/login"><b>Belépés</b></a></li>
        <li><a href="http://localhost/webshop2/site/signup"><b>Regisztráció</b></a></li>
        <?php else:?>
        <li><a href="http://localhost/webshop2/site/user"><b>Userek</b></a></li>
        <li><a href="http://localhost/webshop2/site/logout"><b>Kilépés</b></a></li>
        
      <?php endif;?>
        
        
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
<i class="glyphicon glyphicon-shopping-cart"></i>
    <div class="container">
        <p class="pull-left" <img src="/images/logo-color.png" alt="" </p>
        <p class ="alsocim">SapiAdvertiser</p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
