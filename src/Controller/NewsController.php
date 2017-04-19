<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class NewsController extends AppController
{	
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
	// hien thi tin tuc
	public function viewnews(){
		$new=$this->News->find('all')
          ->contain(['Users']); // de lay dc du lieu ben bang user
          //->toArray();
          $this->set('new', $this->paginate($new,['limit' => 5,
         'order' => [
             'News.id_news' => 'desc'
         ]]));
          $this->set(compact('new'));
	}

	public function addnews(){
        if ($this->request->is('post')) {
         $id=$this->request->session()->read('Auth.User.id_user');
         $this->request->data['id_user']=$id;
         $new = $this->News->newEntity($this->request->data);
            if ($this->News->save($new)) {
                $this->Flash->success(__('Your news has been saved.'));
                return $this->redirect(['action' => 'viewnews']);
            }
            $this->Flash->error(__('Unable to add your new.'));
        }
	}

    public function detailnews($id_new){
         $new = $this->News->get($id_new);
         $this->set(compact('new'));
    }

    //like and dislike
    public function likeNews($id_new){
        if(isset($_POST['Likes'])){
            $sessionuser=$this->request->session()->read('Auth.User.id_user');
            if($sessionuser){
                $like=$this->request->data['likes'];
                $like+=1;
                $this->request->data['id_news']=$id_new;
                $this->request->data['likes']=$like;
                $new=$this->News->newEntity($this->request->data);
                if($this->News->save($new)){
                    return $this->redirect(['action'=>'detailnews/'.$id_new]);
                }
            }else{
                return $this->redirect(['action' => '../users/login']);
            }
        }

        //dislike
        if(isset($_POST['Dislikes'])){
             $sessionuser=$this->request->session()->read('Auth.User.id_user');
            if($sessionuser){
                $dislike=$this->request->data['dislike'];
                $dislike+=1;
                $this->request->data['id_news']=$id_new;
                $this->request->data['dislike']=$dislike;
                $new=$this->News->newEntity($this->request->data);
                if($this->News->save($new)){
                    return $this->redirect(['action'=>'detailnews/'.$id_new]);
                }
            }else{
                return $this->redirect(['action' => '../users/login']);
            }
        }
    }

}
?>