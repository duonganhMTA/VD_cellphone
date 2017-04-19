<?php
use Cake\Routing\Router;
Router::plugin(
    'Admins',
    ['path' => '/admin'],
    function ($routes) {
        $routes->connect('', ['controller' => 'Login', 'action' => 'login']);
        $routes->connect('/login', ['controller' => 'Login', 'action' => 'login']);
        $routes->connect('/logout', ['controller' => 'Login', 'action' => 'logout']);
        $routes->connect('/add', ['controller' => 'Login', 'action' => 'add']);
        $routes->connect('/index', ['controller' => 'Project', 'action' => 'index']);
        $routes->connect('/project', ['controller' => 'Project', 'action' => 'detailProject']);
        $routes->connect('/project/:id', ['controller' => 'Project', 'action' => 'detailProject'], ['id' => '\d+', 'pass' => ['id']]);
        $routes->connect('/purchased-project', ['controller' => 'Project', 'action' => 'purchasedProjectList']);
        $routes->connect('/csvCreate', ['controller' => 'Project', 'action' => 'csvCreate']);
        $routes->connect('/csvDownload', ['controller' => 'Project', 'action' => 'csvDownload']);
        $routes->connect('/proposal-project', ['controller' => 'Project', 'action' => 'proposalProjectList']);
        $routes->connect('/proposal', ['controller' => 'Project', 'action' => 'proposal']);
        $routes->connect('/proposal/:project_id/:sjoi_reciever', ['controller' => 'Project', 'action' => 'proposal'], ['project_id' => '\d+','sjoi_reciever' => '\d+', 'pass' => ['project_id', 'sjoi_reciever']]);
        $routes->connect('/proposal-project/:id', ['controller' => 'Project', 'action' => 'proposalProjectList'], ['id' => '\d+', 'pass' => ['id']]);
        //Member
        $routes->connect('/company-list', ['controller' => 'Member', 'action' => 'companyList']);
        $routes->connect('/company', ['controller' => 'Member', 'action' => 'companyDetail']);
        $routes->connect('/company/:id', ['controller' => 'Member', 'action' => 'companyDetail'], ['id' => '\d+', 'pass' => ['id']]);
        
        $routes->fallbacks('DashedRoute');
    }
);