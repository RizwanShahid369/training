<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:46 AM
 */
//namespace MVC;

require_once ('../core/controllers/Controller.php');


class CustomerController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->setModel('Customer');
        $this->controllerName = 'customer';
        $array = [
            'insert',
            'delete',
            'edit',
            'add',
            'update',
            'findAll',
            'findOne',
            'search',
            'removeOne'
        ];
        $this->routing->addAuthenticated($array);
    }
}
