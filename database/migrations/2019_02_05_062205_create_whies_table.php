<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhiesTable extends Migration
{
    public function up()
    {
        Schema::create('whies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('article');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('whies');
    }
}
