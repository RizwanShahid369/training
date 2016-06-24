<?php

include ('viewManager.php');
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

    public function displaySmarty($abd)
{
    $this->viewManager->addParams('arr', $abd);
    include '../../app/views/student/view.tpl';
    //$this->viewManager->render('view', $this->controller);
}
    public function displaySmarty1($abd)
    {
       // $this->viewManager->addParams('arr', $abd);
        include '../app/views/student/login.tpl';
        //$this->viewManager->render('view', $this->controller);
    }
    public function welcome($abd)
    {
        // $this->viewManager->addParams('arr', $abd);
        include '../app/views/student/welcome.tpl';
        $this->viewManager->render('view', $this->controller);
    }
    public function logsout($abd)
    {
        // $this->viewManager->addParams('arr', $abd);
        include '../app/views/student/logout.tpl';
      //  $this->viewManager->render('view', $this->controller);
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
}