<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
?>
<div class="row">
        <?php if($product):?>
            <div class="col-lg-6 text-center">
            <?php echo Html::img('@web/images/laptop.jpg') ?>
                <img src="/images/products/<?php echo $product['main_image']; ?>" title="<?php echo $product['name']; ?>" alt="<?php echo
                $product['name'];
                ?>">
            </div>
            <div class="col-lg-6">
                <h2><?php echo $product['name']; ?></h2>
                <br/>
                <h5>Adat: <?php echo $product['price']; ?> </h5>
                <h5>Id: <?php echo $product['stock']; ?> </h5>
                <br/>
                <p>Leírás:</p>
                <p>
                    <?php echo $product['description']; ?>
                </p>
                <br/>
                <br/>
                <div class="input-group">
                    <form method="POST" action="<?php echo Yii::$app->request->baseUrl ?>/cart/add">
                        <input type="hidden" name="product_id" value="<?php echo $product['id']; ?>">
                        <input type="text"  name="quantity" class="pull-left form-control"   placeholder="Irj commentet" aria-describedby="basic-addon2">
                        <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                               value="<?=Yii::$app->request->csrfToken?>"/>
                        <button type="submit" class="pull-left btn btn-orange" id="basic-addon2">Comment</button>
                    </form>
                </div>
            </div>
        <?php else:?>
            <div class="text-center">
                <br/>
                <h1 >Nincs megjeleníthető hirdetes</h1>
                <br/>
                <br/>
                <img src="<?php echo Yii::$app->request->baseUrl; ?>/images/notfound.gif" alt="Nincs megjeleníthető hirdetes" title="Nincs megjeleníthető hirdetés">
                <br/>
                <br/>
                <br/>
                <br/>
                <a class="btn  btn-default" href="<?php echo Yii::$app->request->baseUrl; ?>/product/listall">Vissza a hirdetésekhez</a>
            </div>
        <?php endif;?>

</div>