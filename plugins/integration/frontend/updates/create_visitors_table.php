<?php namespace Integration\Frontend\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateVisitorsTable extends Migration
{
    public function up()
    {
        Schema::create('integration_frontend_visitors', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('crm_id', 255);
            $table->string('user_id', 255);
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email', 255);
            $table->boolean('cable')->default(false);
            $table->boolean('breakfast')->default(false);
            $table->boolean('collaborator')->default(false);
            $table->timestamps();

            $table->unique('email');
            $table->index(['crm_id', 'email', 'user_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('integration_frontend_visitors');
    }
}
