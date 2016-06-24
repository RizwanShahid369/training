<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
//namespace MVC;

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

            //check if manager exists in the db
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('staff'));

            $addr = $param['manager_staff_id'];
            $criteria->whereEquals('staff_id', $addr);
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

        for ($i=0; $i < count($param); $i++) {
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('staff'));

            $addr = $param[$i]['manager_staff_id'];
            $criteria->whereEquals('staff_id', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            if (!(empty($addr_arr))) {
                $addr_id = $addr_arr[0]['first_name'] ." ". $addr_arr[0]['last_name'];
                $param[$i]['manager_staff_id'] = $addr_id;
            }
        }
    }
}
