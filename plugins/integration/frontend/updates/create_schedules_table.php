<?php namespace INTEGRATION\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_schedules', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('planning_id');
            $table->integer('shift_id');
            $table->timestamps();

            $table->unique('planning_id');
            $table->index(['planning_id', 'shift_id']);
            $table->foreign('shift_id')->references('planning_id')->on('integration_frontend_shifts');
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_schedules');
    }
}
