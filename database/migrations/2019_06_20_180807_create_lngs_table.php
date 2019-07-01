<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLngsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lngs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('u_id')->index();
            $table->string('org_name', 100);
            $table->string('short_name',20);
            $table->string('icon',300);
            $table->integer('default')->default(0);
            $table->integer('ordering');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lngs');
    }
}
