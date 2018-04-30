<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);          
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->date('startdate')->nullable();
            //$table->enum('status', ['Administrador', 'Estudiante', 'Instructor', 'Coordinador','Usuariox'])->nullable();

            //fk
            $table->integer('roll_id')->Unsigned()->default(5);
            $table->foreign('roll_id')->references('id')->on('rollusers');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
