<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
 
class CartsTable extends Table {

     public function initialize(array $config){
            $this->addBehavior('Timestamp');
            $this->belongsTo('Products',['className'=>'Products','foreignKey'=>'id_product']); 
            $this->belongsTo('Users',['className'=>'Users','foreignKey'=>'id_user']);         
        }
    // public function addProduct($productId) {
    //     $allProducts =$this->request->session()->read();
    //     if ($allProducts!=null) {
    //         if (array_key_exists($productId, $allProducts)) {
    //             $allProducts[$productId]++;
    //         } else {
    //             $allProducts[$productId] = 1;
    //         }
    //     } else {
    //         $allProducts[$productId] = 1;
    //     }
         
    //     $this->save($allProducts);
    // }
     
    // /*
    //  * get total count of products
    //  */
    // public function getCount($id_cart) {
    //     //$allProducts = $this->readProduct();
         
    //     if (count($allProducts)<1) {
    //         return 0;
    //     }
         
    //     $count = 0;
    //     foreach ($allProducts as $product) {
    //         $count=$count+$product;
    //     }
         
    //     return $count;
    // }
 
    // /*
    //  * save data to session
    //  */
    // public function saveProduct($data) {
    //      $dt=$this->request->session()->write('cart',$data)
    //     return $dt;
    // }
 
    // /*
    //  * read cart data from session
    //  */
    // public function readProduct() {
    //     return CakeSession::read('cart');
    // }
 
}