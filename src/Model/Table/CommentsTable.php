<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class CommentsTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsTo('Users',['className'=>'Users','foreignKey'=>'id_user']);
        $this->belongsTo('Gifts',['className'=>'Gifts','foreignKey'=>'id_gift']);
    }
}
?>