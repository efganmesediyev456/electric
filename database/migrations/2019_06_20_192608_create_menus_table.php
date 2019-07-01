<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('l_id')->default(1);
            $table->foreign('l_id')->references('u_id')->on('lngs');
            $table->integer('u_id');
            $table->integer('sub_id');
            $table->integer('ordering');
            $table->string('title');
            $table->string('description',300);
            $table->string('keyword',300);
            $table->string('name',200);
            $table->string('url_tag',200);
            $table->string('picture',300);
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
        Schema::dropIfExists('menus');
    }
}
