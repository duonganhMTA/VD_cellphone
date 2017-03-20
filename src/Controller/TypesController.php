<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
class TypesController extends AppController
{
	public function getlisttype(){
		 $type = $this->Types->find('all');
         $this->set(compact('type'));
	}

	public function getlistphone(){
		$type=$this->Types->find('first',['conditions'=>['Types.loai'=>1]]);
		//$this->set(compact('type'));
	}
}
?>
