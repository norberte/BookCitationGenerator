<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Template', function (Blueprint $table) {
            $table->increments('tid');
            $table->string('tname', 255)->unique();
            $table->json('tags')->nullable();
            $table->json('style')->nullable();
            $table->json('keyword')->nullable();
            $table->string('createdBy')->nullable();
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
        Schema::dropIfExists('Template');
    }
}
