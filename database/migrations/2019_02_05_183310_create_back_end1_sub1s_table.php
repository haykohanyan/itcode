<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBackEnd1Sub1sTable extends Migration
{
    public function up()
    {
        Schema::create('back_end1_sub1s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('row');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('back_end1_sub1s');
    }
}
