<?php namespace Oswaldo\Airlines\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOswaldoAirlines extends Migration
{
    public function up()
    {
        Schema::create('oswaldo_airlines_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre')->nullable();
            $table->integer('flota')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('oswaldo_airlines_');
    }
}
