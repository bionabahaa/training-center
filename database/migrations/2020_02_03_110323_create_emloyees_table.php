<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmloyeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emloyees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('en_fname');
            $table->string('ar_fname');
            $table->string('en_lname');
            $table->string('ar_lname');
            $table->string('en_address');
            $table->string('ar_address');
            $table->string('image');
            $table->string('image_national_id');
            $table->string('image_contract');
            $table->text('phone');
            $table->text('mobile');
            $table->string('email')->unique();
            $table->text('job');
            $table->string('gender');
            $table->date('birthday');
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
        Schema::dropIfExists('emloyees');
    }
}
