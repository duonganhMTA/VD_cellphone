<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use Cake\Mailer\Email;
class ContactsController extends AppController
{	
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }
	public function sendcontact(){
         $send = $this->Contacts->newEntity();
         if ($this->request->is('post')) {
            $email = new Email('gmail');
                $email
               ->to('duonganh95hd@gmail.com')
               ->subject('Hello welcome cellphone')
               ->send('My message');
             $send = $this->Contacts->patchEntity($send,$this->request->data);
                if ($this->Contacts->save($send)) {
                    $this->Flash->success(__('Your are sending contact successful'));
                  //  return $this->redirect($this->Auth->redirectUrl());
                }else{
                $this->Flash->error('you are not sending');
                 }
        }
        $this->set(compact('send'));
        $this->set('_serialzie',['send']);
    }
}
?>