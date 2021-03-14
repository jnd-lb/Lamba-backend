<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaseItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('case_item', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger('case_id');
            $table->foreign('case_id')->references('id')->on('cases'); 
       
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('case_item_necessity');
    }
}
