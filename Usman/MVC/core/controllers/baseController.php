<?php

include ('../core/viewManager.php');
class baseController
{
    public $controller;
    public $model;
    public $tpl;

    public function __construct()
    {
        $this->viewManager = new ViewManager();
    }

    public function model($model)
    {
        require_once ("../app/models/". $model . '.php');
        $this->controller = $model;
        $this->model = new $model;
        return $this->model;
    }

    public function displaySmarty($res)
    {
        $this->viewManager->addParams('arr', $res);
        $this->viewManager->render('view', $this->controller);
    }

    public function displaySmartyInsert()
    {
        include '../app/views/student/insert.tpl';
        $this->viewManager->render('insert', $this->controller);
    }

    public function displaySmartyDelete()
    {
        include '../app/views/student/delete.tpl';
        $this->viewManager->render('delete', $this->controller);
    }

    public function displaySmartyEdit()
    {
        include '../app/views/student/edit.tpl';
        $this->viewManager->render('edit', $this->controller);
    }

    public function displaySmartyLogin()
    {
        include '../app/views/login/login.tpl';
        //$this->viewManager->render('login', $this->controller);
    }
    
    public function displaysmartLogout()
    {
        include '../app/views/login/logout.tpl';
    }

    public function displaysmartNext()
    {
        include '../app/views/next/next.tpl';
    }
}