<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class DetailcartsTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Carts',['className'=>'Carts','foreignKey'=>'id_cart']);
        $this->belongsTo('Products',['className'=>'Products','foreignKey'=>'id_product']);
    }    
}
?>