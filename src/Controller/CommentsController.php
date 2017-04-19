<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
class CommentsController extends AppController
{	
	
  public function  addcomment()
     {
      //call session
          $Sessionname= $this->request->session()->read('Auth.User.username');
          if($Sessionname){
            if ($this->request->is('post')) {
                 $iduser=$this->request->session()->read('Auth.User.id_user'); 
                 $idgift=$this->request->session()->read('idgift'); 
                $this->request->data['id_user']=$iduser;
                $this->request->data['id_gift']=$idgift; 
                //pr($idgift);die();
                $comment  = $this->Comments->newEntity($this->request->data);
                      if($comment->errors()){
                       $this->Flash->error(__('Unable to add your comment.'));
                        }else{
                       if ($this->Comments->save($comment)) {
                            return $this->redirect('/gifts/detailgift/'.$idgift);
                          }      
                      }
                  }
                  $this->set('comment', $comment);  
              }else{
           return $this->redirect(['action' => '../users/login']);
          }
      } 
 
	public function viewcomment(){
    $this->viewBuilder->layout(false);
		      $comment=$this->Comments->find('all')
        ->where(['Comments.id_gift'=>$id_gift])
          ->contain(['Users']); // de lay dc du lieu ben bang user
          //->toArray();
          // pr($comment);die();
          
          $this->set('comment', $this->paginate($comment,['limit' => 10,
         'order' => [
             'Comments.id_comment' => 'desc'
         ]]));
          $this->set(compact('comment'));
	}
}
?>