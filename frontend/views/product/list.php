<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<div class="row">
    <h1 class="kategoria">Hirdetések</h1>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <?php if(!$products):?>
            <h3 class="kategoria">Nincs hirdetes feltöltve</h3>
        <?php else:?>
            <?php foreach($products as $product):?>
                <div class="col-xs-4 col-md-2 ">
                    <a href="<?php echo Yii::$app->request->baseUrl ?>/category/<?php echo $product['id'] ?>/products" class="thumbnail">
                         <img src="http://via.placeholder.com/350x150" alt="<?php echo $product['name'];?>" title="<?php echo $product['name'];?>"> 
                        <h4 class="text-center">
                            
                            <?php echo $product['name'];?>
                        </h4>
                        <hr />
                        <p class="text-muted padding-20">
                            <?php echo substr($product['description'], 0, 100).'...';?>
                        </p>
                    </a>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>