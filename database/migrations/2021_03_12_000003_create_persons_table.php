<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string("first_name");
            $table->string("middle_name");
            $table->string("last_name");
            $table->date("date_of_birth");
            $table->string("gendre");
            $table->bigInteger("shoes_size");
            $table->bigInteger("pants_size");
            $table->bigInteger("shirt_size");

            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families');
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
        Schema::dropIfExists('persons');
    }
}
