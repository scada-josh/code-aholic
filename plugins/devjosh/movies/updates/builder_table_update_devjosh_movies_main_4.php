<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevjoshMoviesMain4 extends Migration
{
    public function up()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->integer('parent_id');
        });
    }
    
    public function down()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->dropColumn('parent_id');
        });
    }
}
