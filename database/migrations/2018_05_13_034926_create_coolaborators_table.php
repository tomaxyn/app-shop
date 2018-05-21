<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoolaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coolaborators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('instructor');
            $table->string('coordinator');
            $table->string('traductor');


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
        Schema::dropIfExists('coolaborators');
    }
}
