<?php namespace INTEGRATION\Frontend\Updates;

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
            $table->string('naam', 255);
            $table->string('website', 255);
            $table->string('telefoonnummer', 255);
            $table->timestamps();
            $table->unique('naam');
            $table->index(['cms_id', 'naam']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_sponsors');
    }
}
