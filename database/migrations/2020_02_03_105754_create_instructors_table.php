<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('en_fname');
            $table->string('ar_fname');
            $table->string('en_lname');
            $table->string('ar_lname');
            $table->string('address');
            $table->text('phone');
            $table->text('mobile');
            $table->string('image');
            $table->string('image_contract');
            $table->string('email')->unique();
            $table->string('gender');
            $table->time('avilable_time');
            $table->date('birthday');
            $table->text('shortbio');
            $table->integer('salary');
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
        Schema::dropIfExists('instructors');
    }
}
