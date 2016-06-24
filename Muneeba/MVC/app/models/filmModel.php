<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */
namespace MVC;

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
}
