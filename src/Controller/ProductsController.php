<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
class ProductsController extends AppController
{	
	public function initialize()
    {
        parent::initialize();
          $this->Auth->allow();
    }

    //hiển thị toan bo sản phẩm
	public function viewproduct(){
		$sp = $this->Products->find('all');
        $this->set('sp', $this->paginate($sp,['limit' => 10,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));
	}

	// san pham moi
	public function newproduct(){

		$sp=$this->Products->find('all',['conditions'=>['Products.status'=>1]]);
		$this->set('sp',$this->paginate($sp,['limit'=>10,
			'order'=>[
			'Products.id_product'=>'asc'
			]
			]));
	}
	// chi tiết sản phẩm
	public function detailproduct($id_product){
		 $this->viewBuilder()->layout(false);
		 $sp = $this->Products->get($id_product);
     $this->set(compact('sp'));

        //relate product
    $id=$this->request->session()->read('id_tp');
		$sanpham = $this->Products->find('all',['conditions' => ['Products.id_type' =>$id]]);
		$this->set('sanpham', $this->paginate($sanpham,['limit' => 7,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));

        // check form button addCart
         if ($this->request->is('post')) {
         	    $Sessionname= $this->request->session()->read('Auth.User.username');
            if($Sessionname){
                $id1=$id_product;
                $query = $this->Products->find('all')->where(['id_product' => $id1]);
                 // pr($id1);die();
                $_SESSION['cart'] = array();
                if($query){
                    foreach ($query as $product) {
                        if(isset($_SESSION['cart'][$id1]['id'])){
                           $_SESSION['cart'][$id1]['quantity'] = $_SESSION['cart'][$id1]['quantity'] + 1;
                       }else{
                           $_SESSION['cart'][$id1]['id_product'] = $product->id_product;
                           $_SESSION['cart'][$id1]['name_product'] = $product->name_product;
                           $_SESSION['cart'][$id1]['img_product'] = $product->img_product;
                           $_SESSION['cart'][$id1]['price'] = $product->price_product;
                           $_SESSION['cart'][$id1]['quantity'] = 1;
                     }
                  }
              }

        } else{
           return $this->redirect(['action' => '../users/login']);
        }
	}
}

	//sản phẩm cùng thể loại
	public function getproduct($id)
	{	
		$sp = $this->Products->find('all',['conditions' => ['Products.id_type' =>$id]]);
		$this->set('sp', $this->paginate($sp,['limit' => 10,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));	
	}	
}
?>