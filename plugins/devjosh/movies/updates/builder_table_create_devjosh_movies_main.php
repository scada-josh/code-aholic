<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDevjoshMoviesMain extends Migration
{
    public function up()
    {
        Schema::create('devjosh_movies_main', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('devjosh_movies_main');
    }
}
