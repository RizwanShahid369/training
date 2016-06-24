<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
//namespace MVC;

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

    public function beforeInsert(&$param)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower('address'));

        $addr = $param['address_id'];
        $criteria->whereEquals('address', $addr);
        $this->db->select($criteria);

        $this->db->execute();
        $addr_arr = $this->db->resultSet();
        //var_dump($addr_arr);
        if (!(empty($addr_arr))) {
            $addr_id = $addr_arr[0]['address_id'];
            $param['address_id'] = $addr_id;

            //check if store exists in the db
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('store'));

            $addr = $param['store_id'];
            $criteria->whereEquals('store_id', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            //var_dump($addr_arr);
            if (!(empty($addr_arr))) {
                return $addr_id;
            } else {
                return -1;
            }

        } else
        {
            return -1;
        }

    }
    

    public function afterSelectAll(&$param)
    {
        for ($i=0; $i < count($param); $i++) {
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('address'));

            $addr = $param[$i]['address_id'];
            $criteria->whereEquals('address_id', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            if (!(empty($addr_arr))) {
                $addr_id = $addr_arr[0]['address'];
                $param[$i]['address_id'] = $addr_id;
            }
        }
    }
}
