<?php

include ('../core/viewManager.php');

class baseController
{
    public $controller;
    public $model;
    public $tpl;
    public $object;
    public $result;

    public function __construct()
    {
        $this->viewManager = new ViewManager();
    }

    public function doAction($method, $controller, $param)
    {
        call_user_func_array([$controller, $method], $param);
    }

    public function setController($cont)
    {
        $this->controller = $cont;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setObject($obj)
    {
        $this->object = $obj;
    }

    public function select()
    {
        $res = $this->object->selectFunction();
        $this->displaySmarty($res);
    }

    public function insert()
    {
        $this->displaySmartyInsert();
    }

    public function insertVal()
    {
        $this->object->insertFunction($_REQUEST);
        $this->select();
    }

    public function delVal($data)
    {
        $res = $this->object->deleteFunction($data);
        $this->select();
    }

    public function editVal()
    {
        $this->object->editFunction($_REQUEST);
        $this->select();
    }

    public function edit($data)
    {
        $data = $this->object->buildData($data, $_REQUEST);
        $this->displaySmartyEdit($data);
    }

    public function displaySmarty($res)
    {
        $this->viewManager->addParams('arr', $res);
        $this->viewManager->render($this->model,'view', $this->controller);
    }

    public function displaySmartyInsert()
    {
        $this->viewManager->render($this->model, 'insert', $this->controller);
    }

    public function displaySmartyEdit($data)
    {
        $this->viewManager->data = $data;
        $this->viewManager->render($this->model,'forms', $this->controller);
    }

    public function displaySmartyLogin()
    {
        $this->viewManager->render($this->model,'login', $this->controller);
    }
    
    public function displaysmartLogout()
    {
        include '../app/views/login/logout.tpl';
    }

    public function displaysmartNext()
    {
        $this->viewManager->render($this->model,'index', $this->controller);
    }
}