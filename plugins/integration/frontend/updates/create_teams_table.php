<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTeamsTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_teams', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->string('leader');
            $table->timestamps();

            $table->foreign('leader')->references('cms_id')->on('integration_frontend_visitors');
            $table->unique('name');
            $table->index(['name']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_teams');
    }
}
