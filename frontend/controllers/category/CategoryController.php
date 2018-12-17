<?php

namespace frontend\controllers\category;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\controllers\category\BaseCategoryController;

class CategoryController extends BaseCategoryController{

    private $categories = [];
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['list'],
                'rules' => [
                    // [
                    //     'actions' => ['signup'],
                    //     'allow' => true,
                    //     'roles' => ['?'],//nem kell bejelentkezve legyen
                    // ],
                    [
                        'actions' => ['list'],
                        'allow' => true,
                        'roles' => ['@'],//be kell legyen jelnetkezve az az elershez
                    ],
                ],
            ]
        ];
    }

    public function actionList()
    {
        $this->categories = $this->getCategories();
        return $this->render('//category/list',['categories' => $this->categories]);
    }
     public function actionNewpost(){
       // $this->categories = $this->addCategories(); 
         return $this->render('//category/newpost',['categories'=>$this->categories]);
     }
}

?>
