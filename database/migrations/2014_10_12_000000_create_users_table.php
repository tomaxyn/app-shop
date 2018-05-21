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
            $table->string('name');          
            $table->string('email')->unique();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('mail')->nullable();
            $table->date('birthdate')->nullable();            
            $table->string('uso_horario')->nullable();
            $table->string('matricula')->unique()->nullable();
            //$table->enum('status', ['Administrador', 'Estudiante', 'Instructor', 'Coordinador','Usuariox'])->nullable();


            //fk
            $table->integer('roll_id')->Unsigned()->default(6);
            $table->foreign('roll_id')->references('id')->on('rollusers');

            $table->integer('country_id')->Unsigned()->default(1);
            $table->foreign('country_id')->references('id')->on('countries');


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
