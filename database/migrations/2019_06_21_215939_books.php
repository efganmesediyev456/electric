<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Books extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('books', function (Blueprint $table){
           $table->bigIncrements('id');
           $table->integer('u_id');
           $table->string('name',100);
           $table->string('path');
           $table->integer('l_id');
            $table->foreign('l_id')->references('u_id')->on('lngs');
           $table->softDeletes();
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
        //
        Schema::dropIfExists('books');
    }
}
