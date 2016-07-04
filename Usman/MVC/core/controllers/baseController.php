<?php

include ('../core/viewManager.php');

class baseController
{
    public $controller;
    public $model;
    public $tpl;
    public $result;

    public function __construct()
    {
        $this->viewManager = new ViewManager();
    }

    public function setController($cont)
    {
        $this->controller = $cont;
    }

    public function setModel($model)
    {
        $this->model = $model;
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