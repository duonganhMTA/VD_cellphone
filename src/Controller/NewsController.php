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
	// hien thi tin tuc
	public function viewnews(){
		$new=$this->News->find('all');
		$this->set('new', $this->paginate($new,['limit' => 5,
         'order' => [
             'News.id_news' => 'asc'
         ]]));
	}

	public function addnews(){
        if ($this->request->is('post')) {
         $new = $this->News->newEntity($this->request->data);
            if ($this->News->save($new)) {
                $this->Flash->success(__('Your news has been saved.'));
                return $this->redirect(['action' => 'viewnews']);
            }
            $this->Flash->error(__('Unable to add your new.'));
        }
    
	}
}
?>