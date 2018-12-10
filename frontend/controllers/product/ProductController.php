<?php

namespace frontend\controllers\product;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\controllers\product\BaseProductController;

class ProductController extends BaseProductController{

    private $products = [];
    
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
        $this->products = $this->getProducts();
        return $this->render('//product/list',['products' => $this->products]);
    }
    public function actionListcategory($id){
        $this->products = $this->getProductCategory($id);
        return $this->render('//product/listcategory',['products' => $this->products]);
    }
    public function actionDetails($id){
        $this->products = $this->getProductOne($id);
        return $this->render('//product/details',['product' => $this->products]);
    }
}

    

?>