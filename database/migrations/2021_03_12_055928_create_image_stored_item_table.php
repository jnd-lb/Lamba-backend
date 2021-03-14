<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageStoredItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_stored_item', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stored_item_id');
            $table->foreign('stored_item_id')->references('id')->on('stored_items');

            $table->string("image_name");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_stored_item');
    }
}
