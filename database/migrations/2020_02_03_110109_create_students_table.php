<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('image_profession_id')->nullable();
            $table->string('en_fname');
            $table->string('ar_fname');
            $table->string('en_lname');
            $table->string('ar_lname');
            $table->string('en_address');
            $table->string('ar_address');
            $table->string('image');
            $table->text('phone');
            $table->text('mobile');
            $table->string('email')->unique();
            $table->text('status');
            $table->string('gender');
            $table->date('dateofjoin');
            $table->integer('amount_paid');
            $table->integer('remaining_amount');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');

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
        Schema::dropIfExists('students');
    }
}
