<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevjoshMoviesMain extends Migration
{
    public function up()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
