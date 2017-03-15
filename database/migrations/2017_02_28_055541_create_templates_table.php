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
            $table->string('tname', 255)->unique();
            $table->integer("bookcollection_id");
            $table->integer('position');
            $table->string('attribute')->nullable();
            $table->string('attributeStyle')->nullable();
            $table->string('keyword')->nullable();
            $table->string('keywordStyle')->nullable();
            $table->string('createdBy')->nullable();
            $table->primary(['tname', 'position']);
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
