<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('en_title');
            $table->string('ar_title');
            $table->text  ('en_descriptions');
            $table->text  ('ar_descriptions');
            $table->string('en_footer');
            $table->string('ar_footer');
            $table->string('en_address');
            $table->string('ar_address');
            $table->string('image');
            $table->string('ar_phone_number');
            $table->string('en_phone_number');


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
        Schema::dropIfExists('systems');
    }
}
