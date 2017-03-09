<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator = new Validator();
        $validator
			    ->requirePresence('fullname')
			    ->notEmpty('fullname', 'Please fill this field')
			    ->add('fullname', [
			        'length' => [
			            'rule' => ['minLength', 4],
			            'message' => 'Titles need to be at least 10 characters long',
			        ]
			    ])
			    
			     ->requirePresence('username')
			    ->notEmpty('username', 'Please fill this field')
			    ->add('username', [
			        'length' => [
			            'rule' => ['minLength', 5],
			            'message' => 'Titles need to be at least 10 characters long',
			        ]
			    ])
			     ->requirePresence('password')
			    ->notEmpty('password', 'Please fill this field')
			    ->add('password', [
			        'length' => [
			            'rule' => ['minLength', 5],
			            'message' => 'Titles need to be at least 10 characters long',
			        ]
			    ])
			    ->requirePresence('email')
			    ->notEmpty('email', 'Please fill this field')
			    ->add('email', [
			        'length' => [
			            'rule' => ['minLength', 5],
			            'message' => 'Titles need to be at least 10 characters long',
			        ]
			    ])
			     ->requirePresence('address')
			    ->notEmpty('address', 'Please fill this field')
			    ->add('address', [
			        'length' => [
			            'rule' => ['minLength',5],
			            'message' => 'Titles need to be at least 10 characters long',
			        ]
			    ])
			    ;
			    return $validator;
			}
	

	// public function beforeSave(Event $event)
 //    {
 //        $entity = $event->getData('entity');

 //        $entity->digest_hash = DigestAuthenticate::password(
 //            $entity->username,
 //            $entity->plain_password,
 //            env('SERVER_NAME')
 //        );
 //        if ($entity->isNew()) {
 //            $hasher = new DefaultPasswordHasher();
 //            $entity->api_key_plain = sha1(Text::uuid());
 //            // $entity->password = $hasher->hash($entity->api_key_plain);
 //        }
 //        return true;
 //   }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        $query
            ->select(['id', 'username', 'password'])
            ->where(['Users.active' => 1]);
        return $query;
    }


    public function getUser(Request $request)
    {
	    $username = env('PHP_AUTH_USER');
	    $password = env('PHP_AUTH_PW');
	    if (empty($username) || empty($password)) {
	        return false;
	    }
	     return $this->_findUser($username, $password);
	}
}
?>