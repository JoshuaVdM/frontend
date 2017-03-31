<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateShiftsTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_shifts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('planning_id');
            $table->string('name', 255);
            $table->string('colaborator_id');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('place');
            $table->text('desc');
            $table->timestamps();

            $table->unique('name');
            $table->index(['planning_id', 'name', 'start', 'place']);
            $table->foreign('colaborator_id')->references('crm_id')->on('integration_frontend_visitors');
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_shifts');
    }
}
