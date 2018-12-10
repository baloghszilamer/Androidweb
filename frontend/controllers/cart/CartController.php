<?php
namespace frontend\controllers\cart;

use common\models\LoginForm;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\controllers\cart\BaseCartController;
use common\models\ShippingAddress;
/**
 * Site controller
 */
class CartController extends BaseCartController
{
    

    public function actionAdd() {
        if(Yii::$app->request->isPost) {
            $product_id = Yii::$app->request->post('product_id');
            $quantity = Yii::$app->request->post('quantity');

            if(!$product_id || !$quantity) {
                Yii::$app->session->setFlash('error', 'Termék hozzáadása sikertelen');
                return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
            }
            $megszamolproduct="select p.main_image,p.stock,pt.name,p.price from product p
            join product_text pt
            on pt.product_id=p.id
            where p.id=$product_id";
            $megszamolstock="select stock from product 
            where id=$product_id";
            $data = Yii::$app->db->createCommand($megszamolstock)->queryOne();
            
           $alldata=Yii::$app->db->createCommand($megszamolproduct)->queryOne();
            
           
        if($data['stock']>$quantity){
         $items=[];
         $items[$product_id]=
         ['name'=>$alldata['name'],
         'quantity'=>  $quantity,
         'price'=>$alldata['price'],
        'image'=>$alldata['main_image']
        ];
        if(isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
            if(array_key_exists($product_id,$_SESSION['cart_item'])){
                echo "<bre>";
                $_SESSION['cart_item'][$product_id]['quantity'] +=$quantity;
            }
            else{
                $_SESSION['cart_item'] +=$items;
            }}
         else
            {
            $_SESSION['cart_item']=$items;}
        
        
        
        
             return $this->redirect('/webshop2/cart/index');
        } else {
            Yii::$app->session->setFlash('error', 'Termék hozzáadása sikertelen');
            return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
        }
    }
}
    public function actionIndex(){
        $cartItems=[];
        if(isset($_SESSION['cart_item'])&& !empty($_SESSION['cart_item'])){
            $cartItems = $_SESSION['cart_item'];
        }
        print_r($cartItems);exit;
        return $this->render('//cart/index', [
            'items' => $cartItems
        ]);
    }
    public function actionRemove($product_id = null) {
        //http://localhost/webshop/cart/remove/34

        //letezik e amit torolni szeretnel
        if(isset($_SESSION['cart_item'])&& !empty($_SESSION['cart_item'])&& $_SESSION['cart_item'][$product_id]){
        if(array_key_exists($product_id, $_SESSION['cart_item'])){
            unset($_SESSION['cart_item'][$product_id]);
        }
     
        }
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);

    }


    /**
     *
     */
    public function actionReset() {
        if(isset($_SESSION['cart_item'])&& !empty($_SESSION['cart_item'])){
            unset($_SESSION['cart_item']);
        }
        return $this->redirect(Yii::$app->request->referrer ?: Yii::$app->homeUrl);
    }

}