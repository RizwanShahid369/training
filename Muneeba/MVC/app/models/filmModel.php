<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
//namespace MVC;

require_once ('../core/models/Model.php');

class FilmModel extends Model
{
    public $film_id;
    public $title;
    public $description;
    public $release_year;
    public $language_id;
    public $original_language_id;
    public $rental_duration;
    public $rental_rate;
    public $length;
    public $replacement_cost;
    public $rating;
    public $special_features;
    public $last_update;

    
    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'Film';
        $this->columnNames = [
            'film_id',
            'title',
            'description',
            'release_year',
            'language_id',
            'original_language_id',
            'rental_duration',
            'rental_rate',
            'length',
            'replacement_cost',
            'rating',
            'special_features',
            'last_update'
        ];

    }
    public function beforeInsert(&$param)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower('language'));

        $addr = $param['language_id'];
        $criteria->whereEquals('name', $addr);
        $this->db->select($criteria);

        $this->db->execute();
        $addr_arr = $this->db->resultSet();
        //var_dump($addr_arr);
        if (!(empty($addr_arr))) {
            $addr_id = $addr_arr[0]['language_id'];
            $param['language_id'] = $addr_id;

            //check if store exists in the db
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('language'));

            $addr = $param['original_language_id'];
            $criteria->whereEquals('name', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            //var_dump($addr_arr);
            if (!(empty($addr_arr))) {
                $addr_id = $addr_arr[0]['language_id'];
                $param['original_language_id'] = $addr_id;

                return $addr_id;
            }

        }
        return -1;


    }

    public function afterSelectAll(&$param)
    {
        for ($i=0; $i < count($param); $i++) {
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('language'));

            $addr = $param[$i]['language_id'];
            $criteria->whereEquals('language_id', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            if (!(empty($addr_arr))) {
                $addr_id = $addr_arr[0]['name'];
                $param[$i]['language_id'] = $addr_id;
            }
        }

        for ($i=0; $i < count($param); $i++) {
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower('language'));

            $addr = $param[$i]['original_language_id'];
            $criteria->whereEquals('language_id', $addr);
            $this->db->select($criteria);

            $this->db->execute();
            $addr_arr = $this->db->resultSet();
            if (!(empty($addr_arr))) {
                $addr_id = $addr_arr[0]['name'];
                $param[$i]['original_language_id'] = $addr_id;
            }
        }
    }
}
