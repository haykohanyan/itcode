<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaily2sTable extends Migration
{
    public function up()
    {
        Schema::create('daily2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('article')->nullable();
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('daily2s');
    }
}