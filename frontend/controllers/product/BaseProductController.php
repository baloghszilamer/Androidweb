<?php

namespace frontend\controllers\product;

use Yii;
use yii\web\Controller;

class BaseProductController extends Controller{

    public function getProducts() {
         $data=('select pt.name,pt.description,p.id from product_text pt
        join product_text p
        on p.id=pt.product_id order by name');
        $data1 = Yii::$app->db->createCommand($data)->queryAll();
        return $data1;
    }
    public function getProductCategory($id){
        $data=('select pt.name,pt.description,p.id from product_text pt
        join product p
        on p.id=pt.product_id
         where p.category_id ='.$id.' order by name');
         $data1 = Yii::$app->db->createCommand($data)->queryAll();
        return $data1;
    }
    public function getProductone($id){
        $data=('select pt.name,pt.description,p.id,p.price,p.stock,p.main_image from product_text pt
        join product p
        on p.id=pt.product_id
         where pt.product_id ='.$id.' order by name');
         $data1 = Yii::$app->db->createCommand($data)->queryOne();
        return $data1;
    }
}


