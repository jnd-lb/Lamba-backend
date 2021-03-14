<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_image', function (Blueprint $table) {
            $table->id();
            $table->string("image_name");
            $table->text("image_descritption")->nullable();
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('cases'); // this is used to keep track who add this case
            $table->boolean("is_main");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_image');
    }
}
