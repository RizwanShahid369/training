<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
namespace MVC;

require_once ('../core/models/Model.php');

class StoreModel extends Model
{
    public $store_id;
    public $manager_staff_id;
    public $address_id;
    public $last_update;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'Store';
        $this->columnNames = [
            'store_id',
            'manager_staff_id',
            'address_id',
            'last_update'
        ];

    }
}
