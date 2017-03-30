<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSponsorsTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_sponsors', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cms_id', 255);
            $table->string('name', 255);
            $table->string('website', 255);
            $table->string('tel', 255);
            $table->timestamps();

            $table->unique('name');
            $table->index(['cms_id', 'name']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_sponsors');
    }
}
