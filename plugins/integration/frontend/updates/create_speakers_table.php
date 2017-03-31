<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_speakers', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('crm_id', 255);
            $table->string('user_id', 255);
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email', 255);
            $table->string('topic', 255);
            $table->string('desc_short', 255);
            $table->text('desc');
            $table->timestamps();

            $table->unique('email');
            $table->index(['crm_id', 'email', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_speakers');
    }
}
