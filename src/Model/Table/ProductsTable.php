<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class ProductsTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Types',['className'=>'Types','foreignKey'=>'id_type']);
    }
    public function getAllProduct(){
    	$sp = $this->find('all',['conditions' => ['Products.status' => '1'],'limit' => 8]);
    	return $sp;
    }
}
?>