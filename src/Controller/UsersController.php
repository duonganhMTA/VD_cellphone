<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;

class UsersController extends AppController
{
    
    public function initialize()
    {
        parent::initialize();
    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }
    
	 public function index(){
         $users = $this->Users->find('all');
       // $this->set(compact('users'));
        $this->set('users', $this->paginate($users,['limit' => 5,
         'order' => [
             'Users.id' => 'asc'
         ]]));
       // 5 la so phan tu trong trang  
    }

     public function view($id=3){

        $users = $this->Users->get($id);
        $this->set(compact('users'));
    }

     public function add(){ 
        if ($this->request->is('post')) {
         $users = $this->Users->newEntity($this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
    }

    public function edit($id){
      
        $users = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
        	$this->request->data['id']=$id;
            $moi=$this->Users->patchEntity($users, $this->request->data);  // tạo biến mới để lưu giá trị sau khi sửa
            if ($this->Users->save($moi)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('users', $users);
	}

	public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $users = $this->Users->get($id);
        if ($this->Users->delete($users)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
	}

    public function register(){
        $this->viewBuilder()->layout(false);// không muốn kế thừa layout
         $user = $this->Users->newEntity();
         if ($this->request->is('post')) {
             $user = $this->Users->patchEntity($user,$this->request->data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Your are registed and can login'));
                    return $this->redirect(['action' => 'login']);
                }else{
                $this->Flash->error('you are not registed');
                 }
        }
        $this->set(compact('user'));
        $this->set('_serialzie',['user']);
    }

    public function login()
    { 
     $this->viewBuilder()->layout(false);
        if ($this->request->is('post')) {
          // $email = new Email('gmail');
          //       $email
          //      ->to('thanhhuyen010695@gmail.com')
          //      ->subject('Hello welcome to CLB Cellphone')
          //      ->send('My message test');
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid email or password, try again'));
        } 
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out');
        return $this->redirect($this->Auth->logout());
    }

}
?>