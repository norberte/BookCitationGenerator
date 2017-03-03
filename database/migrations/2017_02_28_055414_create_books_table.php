<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Book', function (Blueprint $table) {
            $table->increments('bid');
            $table->json('bookAttr')->nullable();
            $table->json('fields')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('codeNum', 255)->nullable();
            $table->string('authorLastName', 255)->nullable();
            $table->string('authorFirstName', 255)->nullable();
            $table->string('illustratorFirstName', 255)->nullable();
            $table->string('illustratorLastName', 255)->nullable();
            $table->string('publisher', 255)->nullable();
            $table->string('copyright', 255)->nullable();
            $table->string('isbn', 255)->nullable();
            $table->string('createdBy',255)->nullable();
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
        Schema::dropIfExists('Book');
    }
}
