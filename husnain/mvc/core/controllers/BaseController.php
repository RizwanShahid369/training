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

/**
 * Class BaseController
 *
 * provide methods 
 */

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

    /**
     * this method add record to the database
     *
     */
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

    /**
     * deletes records from the database
     *
     */
    public function delete()
    {
        echo "in the delete";
        $id = $_GET['id'];
        $this->model->delete($id);
    }

    /**
     * list all records from the table
     *
     */
    public function listt()
    {
        session_start();
        if ($_SESSION['name']) {
            $res = $this->model->selectAll();
            $this->view_manager->addParams('stdarr', $res);
            $this->view_manager->render('listt', $this->controller_name);
        } else {
            echo "Please login first";
        }
    }

    /**
     * edit particular record from the database
     *
     */
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
