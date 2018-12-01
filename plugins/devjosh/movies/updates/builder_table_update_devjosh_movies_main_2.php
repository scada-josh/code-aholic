<?php namespace Devjosh\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDevjoshMoviesMain2 extends Migration
{
    public function up()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->integer('nest_left');
            $table->integer('nest_right');
            $table->integer('nest_depth');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('devjosh_movies_main', function($table)
        {
            $table->dropColumn('nest_left');
            $table->dropColumn('nest_right');
            $table->dropColumn('nest_depth');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
