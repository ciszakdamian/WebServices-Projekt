<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Casts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movies_id');
            $table->foreign('movies_id')->references('id')->on('movies');
            $table->unsignedBigInteger('persons_id');
            $table->foreign('persons_id')->references('id')->on('persons');
            $table->string('role', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casts');
    }
}
