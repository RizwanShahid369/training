<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:45 AM
 */

class Controller
{
    public $model;
    
    public function __construct()
    {
        
    }
    
    public function add()
    {
        $criteria = new \DBclass\Criteria();
        //get parameters through request models from the views
        //and fill up $criteria

        $this->model->insert($criteria);
    }

    public function remove()
    {
        $criteria = new \DBclass\Criteria();
        //get parameters through request models from the views
        //and fill up $criteria

        $this->model->delete($criteria);
    }

    public function findAll($criteria)
    {

        //get parameters through request models from the views
        //and fill up $criteria
        $this->model->selectAll($criteria);
    }

    public function edit()
    {
        $criteria = new \DBclass\Criteria();
        //get parameters through request models from the views
        //and fill up $criteria

        $this->model->update($criteria);
    }

    public function findOne()
    {
        $criteria = new \DBclass\Criteria();
        //get parameters through request models from the views
        //and fill up $criteria

        $this->model->findOne($criteria);
    }

    public function removeOne()
    {
        $criteria = new \DBclass\Criteria();
        //get parameters through request models from the views
        //and fill up $criteria

        $this->model->deleteOne($criteria);
    }
}