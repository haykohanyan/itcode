<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->text('subtitle')->nullable();
            $table->text('article');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
