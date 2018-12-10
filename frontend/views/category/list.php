<div class="row">
    <h1 class="kategoria">Kategóriák</h1>
    <br/>
    <br/>
    <br/>
    <div class="row">
        <?php if(!$categories):?>
            <h3 class="kategoria">Nincs kategória feltöltve</h3>
        <?php else:?>
            <?php foreach($categories as $category):?>
                <div class="col-xs-4 col-md-2 ">
                   <a href="<?php echo Yii::$app->request->baseUrl ?>/category/<?php echo $category['id'] ?>/products" class="thumbnail"> 
                        <!-- <img src="http://via.placeholder.com/350x150" alt="<?php echo $category['name'];?>" title="<?php echo $category['name'];?>"> -->
                        <h4 class="text-center">
                            
                            <?php echo $category['name'];?>
                        </h4>
                        <hr />
                        <p class="text-muted padding-20">
                            <?php echo substr($category['description'], 0, 100).'...';?>
                        </p>
                    </a>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>