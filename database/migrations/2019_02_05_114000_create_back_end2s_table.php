<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackEnd2sTable extends Migration
{

    public function up()
    {
        Schema::create('back_end2s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('back_end2s');
    }
}
