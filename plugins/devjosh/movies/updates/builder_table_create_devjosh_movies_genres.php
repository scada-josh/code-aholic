<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDevjoshMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('devjosh_movies_genres', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('devjosh_movies_genres');
    }
}
