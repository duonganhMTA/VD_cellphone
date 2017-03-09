<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class TypesTable extends Table
{
	public function initialize(array $config){
		$this->addBehavior('Timestamp');
		 $this->hasMany('Products',['className'=>'Products']);          
	}
}
?>