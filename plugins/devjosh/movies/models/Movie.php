<?php namespace Devjosh\Movies\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
    use \October\Rain\Database\Traits\Sortable;


    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'devjosh_movies_main';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /* Relations */

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'movie_gallery' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'genres' => [
            'Devjosh\Movies\Models\Genre',
            'table' => 'devjosh_movies_movies_genres',
            'order' => 'genre_title'
        ]
    ];




}
