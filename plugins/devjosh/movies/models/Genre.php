<?php namespace Devjosh\Movies\Models;

use Model;

/**
 * Model
 */
class Genre extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'devjosh_movies_genres';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* Relations */
    public $belongsToMany = [
        'movies' => [
            'Devjosh\Movies\Models\Movie',
            'table' => 'devjosh_movies_movies_genres',
            'order' => 'id asc'
        ]
    ];
}
