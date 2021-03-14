<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_item', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('case_item_id');
            $table->foreign('case_item_id')->references('id')->on('case_item'); 
    
            $table->decimal("quantity_or_mass");
            
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
        Schema::dropIfExists('donation_item');
    }
}
