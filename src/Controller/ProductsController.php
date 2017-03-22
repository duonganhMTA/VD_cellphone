<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class ProductsController extends AppController
{	
	public function initialize()
    {
        parent::initialize();
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
        $id=$this->request->session()->read('id_tp');
        //pr($id);die();
		$sanpham = $this->Products->find('all',['conditions' => ['Products.id_type' =>$id]]);
		$this->set('sanpham', $this->paginate($sanpham,['limit' => 7,
         'order' => [
             'Products.id_product' => 'asc'
         ]]));

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

	// sản phẩm liên quan
	// public function relatedproduct(){
	// 	$id=$this->request->session()->read('id_tp');
	// 	$sp = $this->Products->find('all',['conditions' => ['Products.id_type' =>$id]]);
	// 	$this->set('sp', $this->paginate($sp,['limit' => 3,
 //         'order' => [
 //             'Products.id_product' => 'asc'
 //         ]]));
	// }
}
?>