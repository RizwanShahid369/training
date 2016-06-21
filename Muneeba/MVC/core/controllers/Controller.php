<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:45 AM
 */

require_once ('../app/views/viewmanager.php');

class Controller
{
    public $controllerName;
    public $model;
    public $viewManager;
    
    public function __construct()
    {
        $this->viewManager = new ViewManager();

    }

    public function setModel($model)
    {
        require_once ("../app/models/". $model . 'Model.php');
        $model = $model . 'Model';
        $this->model = new $model;
        return $this->model;
    }

    public function insert()
    {
        $this->viewManager->render('insert', $this->controllerName);
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

    public function findAll()
    {

        //get parameters through request models from the views
        //and fill up $criteria
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName($this->model->modelName . 's');
        $result = $this->model->selectAll($criteria);
        /*foreach ($result as $key => $value) {
            $this->viewManager->addParams($key, $value);
        }*/

        $this->viewManager->addParams('arr', $result);
        $this->viewManager->render('view', $this->controllerName);
        
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