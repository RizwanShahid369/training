<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/24/16
 * Time: 7:58 AM
 */

require_once ('../core/models/Model.php');

class UserModel extends Model
{
    public $user_id;
    public $email;
    public $password;
    public $last_update;


    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'User';
        $this->columnNames = [
            'user_id',
            'email',
            'password',
            'last_update',

        ];

    }

    public function signUp($email, $password)
    {
        echo "I am ";
        if($this->modelName == 'User')
        {
            echo "User";
            $db =  new \DBclass\DB();

            $criteria = new \DBclass\Criteria();
            $criteria->setTableName($this->modelName);

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
            $criteria->setSelect($this->columnNames[0]);
            $criteria->whereEquals($this->columnNames[1], $email);
            $criteria->whereAND();
            $criteria->whereEquals($this->columnNames[2], $password);
            $db->select($criteria);
            $db->execute();
            $select = $db->resultSet();


            if (!empty($select)) {
                return $select[0]['user_id'];
            } else {
                return -1;
            }
        }

    }

    public function logIn($email, $password)
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
        //var_dump($result);
        //echo "LOGIN";
        if (empty($result)) {
            //echo "Invalid email";
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

                //var_dump($criteria);

                $db->select($criteria);
                $db->execute();
                $select = $db->resultSet();


                //var_dump($select);
                if (!(empty($select))) {
                    //echo "I am user";
                    return $select[0]['user_id'];
                }
            } else {
                echo 'User already exists';
            }
        }
        return -1;

    }
}
