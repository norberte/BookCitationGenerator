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
            $table->string('tname', 255);
            $table->integer('position');
            $table->string('attribute')->nullable();
            $table->string('attributeStyle')->nullable();
            $table->string('keyword')->nullable();
            $table->string('keywordStyle')->nullable();
            $table->string('createdBy')->nullable();
            $table->primary(['tname', 'position']);
            $table->timestamps();
        });

        Schema::create('TemplateKeywords', function (Blueprint $table) {
            $table->string('tname', 255);
            $table->integer('position');
            $table->string('keyword')->nullable();
            $table->string('keywordStyle')->nullable();
            $table->string('createdBy')->nullable();
            $table->primary(['tname', 'position']);
            $table->timestamps();
        });

        Schema::create('TemplateAttributes', function (Blueprint $table) {
            $table->string('tname', 255);
            $table->integer('position');
            $table->string('attribute')->nullable();
            $table->string('attributeStyle')->nullable();
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
        Schema::dropIfExists('TemplateAttributes');
        Schema::dropIfExists('TemplateKeywords');
    }
}
