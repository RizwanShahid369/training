<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:45 AM
 */


require_once ('../app/views/viewmanager.php');
require_once ('../core/models/database/Criteria.php');

class Controller
{
    public $controllerName;
    public $model;
    public $viewManager;
    
    public function __construct()
    {
        $this->viewManager = new ViewManager();

    }

    public static function login()
    {
        require_once ('../core/models/Model.php');
        if (isset($_POST['User'])) {

            $user = ($_POST['User']);
            $email = $user['email'];
            $password = $user['password'];
            if (isset($_POST['save']) && $_POST['save'] == 'value1') {

                setcookie("email", $email, time() + (86400 * 30), "/");
                setcookie('password', $password, time() + (86400 * 30), "/");

                ob_end_flush();
            }
            
            
            $result = Model::logIn($email, $password);
            if (($result)<0) {
                echo "Email or Password is incorrect";
                return false;
            } else {
                var_dump($result);
                $_SESSION['loggedin'] = $result;
                //echo $_SESSION['loggedin'];
            }

            
        }


    }

    public static function signup()
    {
        require_once ('../core/models/Model.php');
        

        if (isset($_POST['User'])) {
            $user = ($_POST['User']);
            $email = $user['email'];

            $password = md5($user['password']);

            $result = Model::logIn($email, $password);

            if (($result)) {
                echo "Email already exists.";
            } else {
                $id = Model::signUp($email, $password);
                $viewManager = new ViewManager();

                $viewManager->addParams('user_id', $id);
                $viewManager->render('view', 'actor');

            }
        }

    }

    public function setModel($model)
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

        $param = $_POST[$this->model->modelName];

        $result = $this->model->find($param);
        $this->viewManager->addParams('arr', $result);
        $this->viewManager->render('view', $this->controllerName);
    }
}
