<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorClassUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('categor_class_user', function (Blueprint $table) {
            
            $table->increments('id');                           

            // FK    
            $table->integer('category_id')->Unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('user_id')->Unsigned();
            $table->foreign('user_id')->references('id')->on('users');


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
         Schema::dropIfExists('categor_class_user');
    }
}
