<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */

require_once ('../core/models/Model.php');

class ActorModel extends Model
{
    public $actor_id;
    public $first_name;
    public $last_name;
    public $last_update;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'Actor';
        $this->columnNames = [
            'actor_id',
            'first_name',
            'last_name',
            'last_update',

        ];

    }
}