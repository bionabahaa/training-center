<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('en_topic');
             $table->string('ar_topic');
             $table->text('en_description');
             $table->text('ar_description');
             $table->string('course_level');
             $table->date('start_date');
             $table->date('end_date');
             $table->date('duration');
             $table->time('course_hours');
             $table->integer('price');
             $table->string('location');
             $table->unsignedBigInteger('category_id');
             $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
             $table->unsignedBigInteger('instructor_id');
             $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');

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
        Schema::dropIfExists('courses');
    }
}
