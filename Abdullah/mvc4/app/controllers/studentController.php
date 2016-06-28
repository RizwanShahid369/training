<?php


ini_set('display_errors', 1);
require_once('/var/www/html/mvc4/core/controllers/baseController.php');

class studentController extends baseController
{
    public function __construct()
    {
        parent::__construct();
        echo "MainController";
    }






    public function selectall($p)
    {
        $user = $this->model($p);
        $abd=$user->selectall();

        $this->displaySmarty($abd);
    }
    public function selectone($p)
    {
        $user = $this->model($p);
        $user->selectone();
        $this->displaySmarty();
    }

    public function update($p)
    {
        $user = $this->model($p);
        $user->update();
        $this->displaySmarty();
       // echo "Successfully updated";
    }
    public function delete($p)
    {
        $user = $this->model($p);
        $user->delete($_POST['del']);
        $this->displaySmarty();
        echo "Succesfully deleted";
    }

   


}