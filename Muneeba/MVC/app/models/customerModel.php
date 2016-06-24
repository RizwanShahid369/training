<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
namespace MVC;

require_once ('../core/models/Model.php');

class CustomerModel extends Model
{
    public $customer_id;
    public $store_id;
    public $first_name;
    public $last_name;
    public $email;
    public $address_id;
    public $active;
    public $create_date;
    public $last_update;


    
    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'Customer';
        $this->columnNames = [
            'customer_id',
            'store_id',
            'first_name',
            'last_name',
            'email',
            'address_id',
            'active',
            'create_date',
            'last_update'
        ];

    }
}
