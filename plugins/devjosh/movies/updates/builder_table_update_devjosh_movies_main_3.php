<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevjoshMoviesMain3 extends Migration
{
    public function up()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->integer('sort_order');
        });
    }
    
    public function down()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
