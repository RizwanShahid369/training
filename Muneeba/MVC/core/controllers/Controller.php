<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:45 AM
 */


require_once ('../app/views/viewmanager.php');
require_once ('Routing.php');
require_once ('../core/models/database/Criteria.php');

class Controller
{
    public $controllerName;
    public $model;
    public $viewManager;
    public $routing;
    
    public function __construct()
    {
        $this->routing = new Routing();
        $this->viewManager = new ViewManager();

    }



    protected function setModel($model)
    {
        require_once ("../app/models/". strtolower($model) . 'Model.php');
        $model = $model . 'Model';
        $this->model = new $model;
        return $this->model;
    }

    public function insert()
    {
        $this->viewManager->render('insert', $this->controllerName);
    }

    public function edit($id = '')
    {
        $this->viewManager->addParams('id', $id);
        $this->viewManager->render('edit', $this->controllerName);
    }

    public function add()
    {
        $arr = $_POST[$this->model->modelName];
        $this->model->insert($arr);
        
        $this->findAll();
    }

    public function remove()
    {
        $this->model->delete();
    }

    public function findAll()
    {

        $result = $this->model->selectAll();

        $this->viewManager->addParams('arr', $result);
        $this->viewManager->render('view', $this->controllerName);
        
    }

    public function update()
    {
        
        $insertArr = $_POST[$this->model->modelName];
        
        $id = ($_POST[$this->model->columnNames[0]]);

        $arr = [];

        foreach ($insertArr as $key => $item) {
            if (!($item == '')) {
                $arr = [ $key => $item ];
            }

        }

        $this->model->update($arr, $this->model->columnNames[0], $id);

        $this->findAll();
    }

    public function findOne()
    {
        $this->model->findOne();
    }

    public function removeOne($id = '')
    {
        $this->model->deleteOne($this->model->columnNames[0], $id);
        $this->viewManager->render('view', $this->controllerName);

        $this->findAll();
    }

    public function search()
    {

        if (isset($_POST[$this->model->modelName])) {
            $param = $_POST[$this->model->modelName];

            $result = $this->model->find($param);
            $this->viewManager->addParams('arr', $result);
            $this->viewManager->render('view', $this->controllerName);
        }
    }

    public function doAction($method)
    {
        //echo "Doing some action";
        $flag = $this->routing->checkMethod($method);

        if($flag > 0) {
            $this->$method();
        } elseif ($flag == 0) {
            if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
                $this->viewManager->addParams('email', $_COOKIE['email']);
                $this->viewManager->addParams('password', $_COOKIE['password']);
            } else {
                $this->viewManager->addParams('email', '');
                $this->viewManager->addParams('password', '');
            }
            $this->viewManager->render('login', 'userController');

        } else {
            $this->viewManager->render('../layouts/error', $this->controllerName);
        }
    }
}
