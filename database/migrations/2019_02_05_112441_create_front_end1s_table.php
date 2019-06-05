<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontEnd1sTable extends Migration
{
    public function up()
    {
        Schema::create('front_end1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('front_end1s');
    }
}
