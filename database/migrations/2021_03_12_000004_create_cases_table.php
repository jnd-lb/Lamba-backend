<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->text("description");
            $table->timestamps();
            $table->boolean("is_published");
            
            $table->unsignedBigInteger('family_id');
            $table->foreign('family_id')->references('id')->on('families');

            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('users'); // this is used to keep track who add this case
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
