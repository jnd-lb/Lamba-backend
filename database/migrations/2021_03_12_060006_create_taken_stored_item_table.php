<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTakenStoredItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taken_stored_item', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('stored_item_id');
            $table->foreign('stored_item_id')->references('id')->on('stored_items');

            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users'); // he may be an admin that he took in order to give it to someone else 

            $table->text("description"); // some details about to where and by who it is taken

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
        Schema::dropIfExists('taken_stored_item');
    }
}
