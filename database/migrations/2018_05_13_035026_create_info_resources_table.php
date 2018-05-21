<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_resources', function (Blueprint $table) {
            $table->increments('id');
            $table->string('document')->nullable();
            $table->string('web')->nullable();
            $table->string('regext')->nullable();

            $table->integer('event_id')->Unsigned();
            $table->foreign('event_id')->references('id')->on('events');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('info_resources');
    }
}
