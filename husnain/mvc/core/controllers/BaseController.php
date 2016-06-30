<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:55 AM
 */
error_reporting(E_ALL);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("display_errors", "On");
//require_once '../core/controllers/ControllerInterface.php';
//require_once '../core/models/database/ModelFactory.php';
//require_once '../core/views/viewManager.php';

/**
 * Class BaseController
 *
 * provide methods
 */

class BaseController implements ControllerInterface
{
    protected $view_manager;
    protected $model;
    protected $model_name;
    protected $controller_name;
    protected $tablename;



    /**
     * @param mixed $modelstudent
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
        $this->model = ModelFactory::getModel($this->model);
        $this->view_manager = new ViewManager();
    }

    /**
     * this method add record to the database
     *
     */
    public function add()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->view_manager->render('add', $this->controller_name);
        } else {
            echo "method is POST";
            $arry = $_POST[$this->model_name];
            $this->model->insert($arry);
            header("location:listAll");
        }
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
        header("location:listAll");
    }

    /**
     * list all records from the table
     *
     */
    public function listAll()
    {
        $res = $this->model->selectAll($this->tablename);
        //$this->view_manager->addParams('arr', $res);
        $this->view_manager->render('listAll', $this->controller_name, $res);
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
            print_r($res);
            //$this->view_manager->addParams('record', $res);
            $this->view_manager->render('edit', $this->controller_name,$res);
        } else {
          $arry = $_POST[$this->model_name];
            $this->model->update($arry);
        }
    }
    public function notFound()
    {
        echo "not found called";
        $this->view_manager->render('error','layouts', '404');
    }
    public function doAction($controller,$method)
    {
        if (isset($method)) {
            if (method_exists($controller, $method)) {
                call_user_func_array([$controller, $method],[]);

            } else {
                echo " {$method} NOT Exists";
                $this->notFound();
            }

        }
    }

}
