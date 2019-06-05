<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseListsTable extends Migration
{
    public function up()
    {
        Schema::create('course_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->nullable();
            $table->text('subtitle')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('course_lists');
    }
}
