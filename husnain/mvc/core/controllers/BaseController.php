<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:55 AM
 */
require_once '../core/controllers/ControllerInterface.php';
require_once '../core/models/database/ModelFactory.php';
require_once '../core/views/viewManager.php';

//require_once '../core/views/viewManager.php';


class BaseController implements ControllerInterface
{
    protected $view_manager;
    protected $model;
    protected $controller_name;


    /**
     * @param mixed $model
     */
    public function setModel($model)
    {

        $this->model = $model;
    }

    /**
     * @param mixed $controller_name
     */
    public function setControllerName($controller_name)
    {
        $this->controller_name = $controller_name;
    }

    public function __construct()
    {
        echo "hello base Controller<br>";
        $this->model = ModelFactory::getModel($this->model);
        $this->view_manager = new ViewManager();
//        var_dump($this->model_factory);
    }

    public function add()
    {
        echo "in the add method base ";
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->view_manager->render('add', $this->controller_name);
        } else {
            echo "method is POST";
            $first_name = $_POST['fname'];
            $last_name = $_POST['lname'];
            $address = $_POST['address'];
            $this->model->insert(array('first_name' => $first_name,
                'last_name' => $last_name,
                'address' => $address));

        }

//        $this->model_factory->
    }

    public function delete()
    {
        echo "in the delete";
        $id = $_GET['id'];
        $this->model->delete($id);
    }

    public function listt()
    {
        session_start();
        //remember to comment it
        //$this->model_factory = new Student();
        if ($_SESSION['name']) {
            $res = $this->model->selectAll();
//        print_r($res); die();

            $this->view_manager->addParams('stdarr', $res);

            $this->view_manager->render('listt', $this->controller_name);
        } else {
            echo "Please login first";

//            echo "<a href = 'index.php'> go to home page</a>";
        }


    }

    public function edit()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $res = $this->model->selectByPk($id);

            $this->view_manager->addParams('record', $res);
            $this->view_manager->render('edit', $this->controller_name);
        } else {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $this->model->update(array('first_name' => $fname, 'last_name' => $lname, 'address' => $address));
            echo "do update call to bla bla ";

        }

    }
}
//$ob = new BaseController();