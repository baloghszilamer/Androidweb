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
}


