<?php

namespace frontend\controllers\category;

use Yii;
use yii\web\Controller;

class BaseCategoryController extends Controller{

    public function getCategories() {
         $data=('select ct.name,ct.description,c.id from category_text ct
        join category_text c
        on c.id=ct.category_id order by name');
        $data1 = Yii::$app->db->createCommand($data)->queryAll();
        return $data1;
    }
    // public function addCategories(){
    //     $add=("insert into category_text (id,name,description )
    //         values(".$_SESSION['name']."".$_SESSION['description'].")");
    // }
    //  Yii::$app->db->createCommand()->batchInsert('category_text', ['id', 'name', 'description'], [
    // //     [1, 'title1', '2015-04-10'],
    // //     [2, 'title2', '2015-04-11'],
    //     [3, 'title3', '2015-04-12'],
    //  ])->execute();
}


