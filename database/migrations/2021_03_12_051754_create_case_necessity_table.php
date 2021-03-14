<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseNecessityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_necessity', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('necessity_id');
            $table->foreign('necessity_id')->references('id')->on('necessities'); // this is used to keep track who add this case

            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('cases'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_necessity');
    }
}
