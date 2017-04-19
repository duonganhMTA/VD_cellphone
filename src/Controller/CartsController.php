<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;
class CartsController extends AppController {
     public function initalize(){
        parent::initialize();
        $this->loadModel('Products');
     }
        //thêm vào giỏ hàng
    public function addCart($id_sp){
         $this->autoRender = false;
         $Sessionname= $this->request->session()->read('Auth.User.username');
          if($Sessionname){
        if ($this->request->is('ajax')) {
            $id =$this->request->session()->read($id_sp);
            $query = TableRegistry::get('Products')->find()->where(['id_product' => $id]);
            
            $_SESSION['cart'] = array();
            if($query){
                foreach ($query as $product) {
                    if(isset($_SESSION['cart'][$id]['id'])){
                       $_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
                   }else{
                       $_SESSION['cart'][$id]['id_product'] = $product->id_product;
                       $_SESSION['cart'][$id]['name_product'] = $product->name_product;
                       $_SESSION['cart'][$id]['img_product'] = $product->img_product;
                       $_SESSION['cart'][$id]['price'] = $product->price_product;
                       $_SESSION['cart'][$id]['quantity'] = 1;
                   }
                }
            }
        }
      }
      else{
           return $this->redirect(['action' => '../users/login']);
          }  
    }


   public function viewCart(){
      
     // $cart =$this->request->session()->read($_SESSION['cart']);
          $cart=$this->Carts->find('all')
          ->contain(['Products','Users']);
         $this->set(compact('cart'));
      }
  

  //   public function addCart() {
  //        $this->autoRender = false;
  //         if ($this->request->is('post')) {
  //           $Sessionname= $this->request->session()->read('Auth.User.username');
  //           if($Sessionname){
  //               $id =$this->request->session()->read($id_sp);
  //               $query = TableRegistry::get('Products')->find()->where(['id_product' => $id]);
                
  //               $_SESSION['cart'] = array();
  //               if($query){
  //                   foreach ($query as $product) {
  //                       if(isset($_SESSION['cart'][$id]['id'])){
  //                          $_SESSION['cart'][$id]['quantity'] = $_SESSION['cart'][$id]['quantity'] + 1;
  //                      }else{
  //                          $_SESSION['cart'][$id]['id_product'] = $product->id_product;
  //                          $_SESSION['cart'][$id]['name_product'] = $product->name_product;
  //                          $_SESSION['cart'][$id]['img_product'] = $product->img_product;
  //                          $_SESSION['cart'][$id]['price'] = $product->price_product;
  //                          $_SESSION['cart'][$id]['quantity'] = 1;
  //                    }
  //                 }
  //             }
  //           }
  //        else{
  //          return $this->redirect(['action' => '../users/login']);
  //       }
  //   }
  // }


	// public function update() {
 //        if ($this->request->is('post')) {
 //            if (!empty($this->request->data)) {
 //                $cart = array();
 //                foreach ($this->request->data['Cart']['count'] as $index=>$count) {
 //                    if ($count>0) {
 //                        $productId = $this->request->data['Cart']['product_id'][$index];
 //                        $cart[$productId] = $count;
 //                    }
 //                }
 //                $this->Cart->saveProduct($cart);
 //            }
 //        }
 //        $this->redirect(array('action'=>'view'));
	// }

}