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
        echo "Base controller";
    }

    public function model($model)
    {
        //echo "adsas", $model;
        include ("../app/models/" . $model . '.php');
        //echo "After  ", $model;
        $this->controller = $model;
        $this->model = new $model;
        //echo "nect";
//        var_dump($this->model);
        return $this->model;
    }
        public function displaySmarty($abd)
    {

        include ('../app/views/student/view.tpl');
        $this->viewManager->addParams1('arr', $abd);
        $this->viewManager->render1('view', $this->controller);
}
    public function displaySmarty1($abd)
    {
        $this->viewManager->addParams('arr', $abd);
        include '../app/views/student/login.tpl';
        $this->viewManager->render('view', $this->controller);
    }
    public function welcome($abd)
    {
         $this->viewManager->addParams('arr', $abd);
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