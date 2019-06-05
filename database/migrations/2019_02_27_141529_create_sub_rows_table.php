<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubRowsTable extends Migration
{

    public function up()
    {
        Schema::create('sub_rows', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('course_list_id')->nullable();
            $table->text('text');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('sub_rows');
    }
}
