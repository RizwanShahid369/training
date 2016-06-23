<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:35 AM
 */
require_once ('../core/models/database/DB.php');


class Model
{
    public $modelName;
    public $columnNames;
    public $attributeNames;
    public $db;

    public function __construct()
    {
        $this->db = new \DBclass\DB();
        //var_dump($this->db);
    }
    
    public function insert($insertArr)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->model->modelName));
        $criteria->insertValues = $insertArr;

        $this->db->insert($criteria);
    }

    public function delete($criteria)
    {
        $this->db->delete($criteria);
    }

    public function update($insertArr, $col, $id)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));

        $criteria->insertValues = $insertArr;
        $criteria->whereEquals($col, $id);

        $this->db->update($criteria);
    }

    public function selectAll()
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));

        $this->db->selectAll($criteria);
        $this->db->execute();
        return ($this->db->resultSet());

    }

    public function selectOne($col, $id)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));


        $criteria->whereEquals($col, $id);

        $this->db->selectOne($criteria);
        $this->db->execute();
        return ($this->db->resultSet());
    }

    public function deleteOne($criteria)
    {
        $this->db->deleteOne($criteria);
    }

    public function find($param)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));

        $key= key($param);
        $criteria->whereEquals($key, $param[$key]);

        $this->db->select($criteria);
        $this->db->execute();
        return ($this->db->resultSet());
    }

    static public function logIn($email, $password)
    {
        $db =  new \DBclass\DB();


        $criteria = new \DBclass\Criteria();
        $criteria->setTableName('user');
        $criteria->setSelect('password');
        $criteria->whereEquals('email', $email);

        //$criteria->whereEquals('password', $password);
        //var_dump($criteria);
        
        $db->select($criteria);
        $db->execute();
        ( $result =  ($db->resultSet()) );
        if(empty($result)) {
            echo "Invalid email";
        } else {
            $password_crypt = ($result[0]['password']);
            $inpassword = md5($password);

            if ($inpassword == $password_crypt) {
                $criteria = new \DBclass\Criteria();
                $criteria->setTableName('user');
                $criteria->setSelect('user_id');
                $criteria->whereEquals('email', $email);
                $criteria->whereAND();
                $criteria->whereEquals('password', $inpassword);

                $db->select($criteria);
                $db->execute();
                $select = $db->resultSet();


                var_dump($select);
                if(!empty($select))
                {

                    return $select[0]['user_id'];
                }
            } else {
                echo 'Invalid password.';
            }
        }
        return -1;

    }


    static public function signUp($email, $password)
    {
        $db =  new \DBclass\DB();

        $criteria = new \DBclass\Criteria();
        $criteria->setTableName('user');

        $arr = [ 'email' => $email,
            'password' => $password
        ];
        //var_dump($arr);
        $criteria->insertValues = $arr;
        //var_dump($criteria);

        //var_dump($criteria);
        $db->insert($criteria);

        $criteria = new \DBclass\Criteria();
        $criteria->setTableName('user');
        $criteria->setSelect('user_id');
        $criteria->whereEquals('email', $email);
        $criteria->whereAND();
        $criteria->whereEquals('password', $password);
        $db->select($criteria);
        $db->execute();
        $select = $db->resultSet();


        if(!empty($select))
        {
            return $select[0]['user_id'];
        }
    }

}