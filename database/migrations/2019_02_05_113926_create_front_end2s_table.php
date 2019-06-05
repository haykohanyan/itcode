<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontEnd2sTable extends Migration
{

    public function up()
    {
        Schema::create('front_end2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('front_end2s');
    }
}
