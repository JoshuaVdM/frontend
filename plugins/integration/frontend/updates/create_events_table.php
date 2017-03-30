<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_events', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('planning_id');
            $table->string('name', 255);
            $table->text('desc');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('location');
            $table->timestamps();

            $table->unique('name');
            $table->index(['planning_id', 'name', 'start']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_events');
    }
}
