<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class GiftsController extends AppController
{	
  public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
	// hien thi thông tin khuyen mai
	public function viewgift(){
     $id=$this->request->session()->read('Auth.User.id_user');
     $this->request->data['id_user']=$id;
    $gift=$this->Gifts->find('all')
          ->contain(['Users']);
     $this->set('gift', $this->paginate($gift,['limit' => 10,
         'order' => [
             'Gifts.id_gift' => 'desc'
         ]]));
          $this->set(compact('gift'));
	}

  //khuyen mai di kem vs tin tưc
  public function viewgift1(){
    $gift1=$this->Gifts->find('all');
     $this->set('gift1', $this->paginate($gift1,['limit' => 4,
         'order' => [
             'Gifts.id_gift' => 'desc'
         ]]));
          $this->set(compact('gift1'));
  }

	public function addgift(){
        if ($this->request->is('post')) {
          $id=$this->request->session()->read('Auth.User.id_user');
         $this->request->data['id_user']=$id;
         $gift = $this->Gifts->newEntity($this->request->data);
            if ($this->Gifts->save($gift)) {
                return $this->redirect(['action' => 'viewgift']);
            }
            $this->Flash->error(__('Unable to add your gift'));
        }
	}

    public function detailgift($id_gifts){
        $gift = $this->Gifts->get($id_gifts);
        $this->set(compact('gift'));
        if($this->loadModel('Comments')){
            $comment=$this->Comments->find('all')
            ->where(['Comments.id_gift'=>$id_gifts])
              ->contain(['Users'])
              ->toArray();
          //  pr($comment);die;
            $this->set(compact('comment'));
        }
    }
}
?>