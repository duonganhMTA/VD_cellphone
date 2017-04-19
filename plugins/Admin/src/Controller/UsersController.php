<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;

class UsersController extends AdminsController
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