<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookcollectionTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookcollection_template', function (Blueprint $table) {
            $table->increments('id');
            $table->string('templates_tname', 255);
            $table->foreign('templates_tname')->references('tname')->on('templates')->onDelete('cascade');
            $table->integer('bookcollections_id')->unsigned();
            $table->foreign('bookcollections_id')->references('id')->on('bookcollections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookcollection_template');
    }
}
