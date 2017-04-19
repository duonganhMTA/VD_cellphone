<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
class AdminsController extends Controller
{

    public function initialize(){
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Paginator');
        //load tat ca cac trang deu phai vao trang login
        $this->loadComponent('Auth',[
            'authenticate'=>[
                'Form'=>[
                    'userModel' => 'Users',
                    'fields'=>[
                        'username'=>'username',
                        'password'=>'password'
                        ]
                    ]
                ], 
                'loginAction'=>[
                    'controller'=>'Users',
                    'action'=>'login'
                ],// sau khi loggin xog điều hướng đến trang sản phẩm mới nhất
                'loginRedirect' => [
                    'controller' => 'Products',
                    'action' => 'newproduct'
                 ],
                  
                  'storage'=>'session'

              ]);
            //$this->Auth->allow('register','newproduct');// cho phep vao trang dang ky ma ko phai dang nhap
    }

    public function index(){
         $users = $this->Users->find('all');
       // $this->set(compact('users'));
        $this->set('users', $this->paginate($users,['limit' => 5,
         'order' => [
             'Users.id' => 'asc'
         ]]));
       // 5 la so phan tu trong trang  
    }

     public function view($id=3){

        $users = $this->Users->get($id);
        $this->set(compact('users'));
    }

     public function add(){ 
        if ($this->request->is('post')) {
         $users = $this->Users->newEntity($this->request->data);
            if ($this->Users->save($users)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
    }

    public function edit($id){
      
        $users = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->request->data['id']=$id;
            $moi=$this->Users->patchEntity($users, $this->request->data);  // tạo biến mới để lưu giá trị sau khi sửa
            if ($this->Users->save($moi)) {
                $this->Flash->success(__('Your article has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your article.'));
        }
        $this->set('users', $users);
    }

    public function delete($id){
        $this->request->allowMethod(['post', 'delete']);
        $users = $this->Users->get($id);
        if ($this->Users->delete($users)) {
            $this->Flash->success(__('The article with id: {0} has been deleted.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    // public function beforeFilter() {
    //     $this->loadModel('Cart'); 
    //     $this->set('count',$this->Cart->getCount());
    // }
        /*0981790859
         * Enable the following components for recommended CakePHP security settings.
         * see http://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    // }

    public function beforeRender(Event $event)
    {
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
        //check viet bai dang
        $Admin=$this->request->session()->read('Auth.User.role_flg');
        if(($this->request->session()->read('Auth.User')) && ($Admin==1)){
            $this->set('loggedAdmin',true);
        }else{
            $this->set('loggedAdmin',false);
        }
        
        //login check
        if($this->request->session()->read('Auth.User')){
            $this->set('loggedIn',true);
        }else{
            $this->set('loggedIn',false);
        }
        //khi load trang van giu gia tri cua bien
        if($this->loadModel('Types')){
            $type=$this->Types->find('all');
            $typeListMobile=$this->Types->find('all',['conditions'=>['Types.loai'=>1]]);
             $this->set(compact('type','typeListMobile'));
        }
    }
}
